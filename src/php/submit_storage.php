<?php

declare(strict_types=1);

/**
 * Secure file-based storage for contact form submissions.
 *
 * Submissions are stored as individual JSON files inside the directory
 * defined by the STORAGE_PATH constant (set in config.php). The directory
 * is protected with restrictive permissions and an .htaccess deny rule.
 */

// ── Helpers ─────────────────────────────────────────────────────────────────

/**
 * Ensure the storage directory exists and is protected.
 */
function ensure_storage_directory(): bool
{
    if (!defined('STORAGE_PATH')) {
        return false;
    }

    $dir = STORAGE_PATH;

    if (!is_dir($dir)) {
        if (!mkdir($dir, 0700, true)) {
            return false;
        }
    }

    // Protect directory with .htaccess (Apache)
    $htaccess = $dir . '/.htaccess';
    if (!file_exists($htaccess)) {
        file_put_contents($htaccess, "Deny from all\n");
    }

    return true;
}

// ── Public API ──────────────────────────────────────────────────────────────

/**
 * Store a contact form submission as a JSON file.
 *
 * @param  array       $data Associative array of submission data.
 * @return string|false      Unique submission ID on success, false on failure.
 */
function store_submission(array $data)
{
    if (!ensure_storage_directory()) {
        return false;
    }

    $id       = date('Ymd_His') . '_' . bin2hex(random_bytes(8));
    $filename = STORAGE_PATH . '/' . $id . '.json';

    $data['id'] = $id;

    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    if ($json === false) {
        return false;
    }

    if (file_put_contents($filename, $json, LOCK_EX) === false) {
        return false;
    }

    return $id;
}

/**
 * Retrieve all submissions, newest first.
 *
 * @param  string $token    Admin token for authentication.
 * @param  int    $page     Page number (1-based).
 * @param  int    $perPage  Results per page.
 * @return array{submissions: array, total: int, page: int, per_page: int}|false
 */
function get_submissions(string $token, int $page = 1, int $perPage = 20)
{
    if (!defined('STORAGE_PATH') || $token === '' || $token !== config('admin_token')) {
        return false;
    }

    $dir = STORAGE_PATH;
    if (!is_dir($dir)) {
        return ['submissions' => [], 'total' => 0, 'page' => $page, 'per_page' => $perPage];
    }

    $files = glob($dir . '/*.json');
    if ($files === false) {
        $files = [];
    }

    // Sort newest first by filename (timestamp-prefixed)
    rsort($files);

    $total  = count($files);
    $page   = max(1, $page);
    $offset = ($page - 1) * $perPage;
    $slice  = array_slice($files, $offset, $perPage);

    $submissions = [];
    foreach ($slice as $file) {
        $contents = file_get_contents($file);
        if ($contents === false) {
            continue;
        }
        $decoded = json_decode($contents, true);
        if (is_array($decoded)) {
            $submissions[] = $decoded;
        }
    }

    return [
        'submissions' => $submissions,
        'total'       => $total,
        'page'        => $page,
        'per_page'    => $perPage,
    ];
}

/**
 * Retrieve a single submission by ID.
 *
 * @param  string      $id    Submission ID (filename without extension).
 * @param  string      $token Admin token for authentication.
 * @return array|false         Submission data or false on failure.
 */
function get_submission(string $id, string $token)
{
    if (!defined('STORAGE_PATH') || $token === '' || $token !== config('admin_token')) {
        return false;
    }

    // Sanitise the ID to prevent directory traversal
    $safeId = basename($id);
    $file   = STORAGE_PATH . '/' . $safeId . '.json';

    if (!file_exists($file)) {
        return false;
    }

    $contents = file_get_contents($file);
    if ($contents === false) {
        return false;
    }

    $decoded = json_decode($contents, true);

    return is_array($decoded) ? $decoded : false;
}
