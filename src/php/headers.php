<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function send_security_headers(): void
{
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
    header(
        "Content-Security-Policy: default-src 'self'; "
        . "script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://www.clarity.ms; "
        . "style-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://fonts.googleapis.com; "
        . "font-src 'self' https://fonts.gstatic.com; "
        . "img-src 'self' data: https:; "
        . "connect-src 'self' https://www.clarity.ms; "
        . "frame-src 'none';"
    );
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}

function generate_csrf_token(): string
{
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;

    return $token;
}

function csrf_token_field(): string
{
    $token = $_SESSION['csrf_token'] ?? generate_csrf_token();

    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
}

function verify_csrf_token(string $token): bool
{
    if (!isset($_SESSION['csrf_token'])) {
        return false;
    }

    return hash_equals($_SESSION['csrf_token'], $token);
}

function sanitize_input(string $input): string
{
    $input = trim($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    return $input;
}

function rate_limit_check(string $ip, int $max_requests = 10, int $window_seconds = 3600): bool
{
    $dir = sys_get_temp_dir() . '/rate_limit';
    if (!is_dir($dir)) {
        mkdir($dir, 0700, true);
    }

    $file = $dir . '/' . md5($ip) . '.json';

    $handle = fopen($file, 'c+');
    if ($handle === false) {
        return true;
    }

    flock($handle, LOCK_EX);

    $contents = stream_get_contents($handle);
    $data = ['count' => 0, 'expires' => time() + $window_seconds];
    if ($contents !== '' && $contents !== false) {
        $decoded = json_decode($contents, true);
        if (is_array($decoded)) {
            $data = $decoded;
        }
    }

    if (isset($data['expires']) && $data['expires'] < time()) {
        $data = ['count' => 0, 'expires' => time() + $window_seconds];
    }

    $data['count']++;

    ftruncate($handle, 0);
    rewind($handle);
    fwrite($handle, json_encode($data));
    fflush($handle);
    flock($handle, LOCK_UN);
    fclose($handle);

    return $data['count'] <= $max_requests;
}
