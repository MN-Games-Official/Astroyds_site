<?php

/**
 * Site configuration for Astroyds.
 * Loads .env from the project root and exposes config helpers.
 */

// ── Load .env ───────────────────────────────────────────────────────────────

$envPath = dirname(__DIR__) . '/.env';

if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0 || strpos($line, '=') === false) {
            continue;
        }
        [$key, $value] = explode('=', $line, 2);
        $key   = trim($key);
        $value = trim($value);
        if (!array_key_exists($key, $_ENV)) {
            $_ENV[$key] = $value;
            putenv("{$key}={$value}");
        }
    }
}

// ── Helper: env() ───────────────────────────────────────────────────────────

/**
 * Retrieve an environment variable with an optional default.
 */
function env(string $key, $default = null)
{
    $value = getenv($key);
    if ($value === false) {
        return $default;
    }

    // Cast common string representations
    $map = ['true' => true, 'false' => false, 'null' => null];
    $lower = strtolower($value);
    if (array_key_exists($lower, $map)) {
        return $map[$lower];
    }

    return $value;
}

// ── Site configuration array ────────────────────────────────────────────────

$siteConfig = [
    // Application
    'app_env'   => env('APP_ENV', 'production'),
    'app_debug' => env('APP_DEBUG', false),
    'app_url'   => env('APP_URL', 'https://astroyds.com'),
    'base_url'  => rtrim(env('APP_URL', 'https://astroyds.com'), '/'),

    // Company details
    'site_name'     => 'Astroyds',
    'tagline'       => 'Moving humanity forward for a better future.',
    'mission'       => 'Building the future, so you don\'t have to.',
    'contact_email' => 'letstalk@astroyds.com',
    'company'       => 'Astroyds',
    'company_type'  => 'Sole Proprietorship',
    'location'      => 'Maple Grove, Hennepin County, Minnesota 55311, USA',
    'domain'        => 'astroyds.com',

    // Feature flags
    'hero_concept'         => env('HERO_CONCEPT', 'A'),
    'enable_clarity'       => env('ENABLE_CLARITY', false),
    'enable_contact_email' => env('ENABLE_CONTACT_EMAIL', false),

    // Clarity
    'clarity_tracking_id' => env('CLARITY_TRACKING_ID', ''),

    // Security
    'csrf_secret'  => env('CSRF_SECRET', ''),
    'admin_token'  => env('ADMIN_TOKEN', ''),

    // Contact storage
    'contact_storage'      => env('CONTACT_STORAGE', 'file'),
    'contact_storage_path' => env('CONTACT_STORAGE_PATH', 'storage/submissions'),

    // SMTP
    'smtp_enabled' => env('SMTP_ENABLED', false),
    'smtp_host'    => env('SMTP_HOST', ''),
    'smtp_port'    => (int) env('SMTP_PORT', 587),
    'smtp_user'    => env('SMTP_USER', ''),
    'smtp_pass'    => env('SMTP_PASS', ''),
    'smtp_from'    => env('SMTP_FROM', 'letstalk@astroyds.com'),
];

// ── Storage path constant ───────────────────────────────────────────────────

define('STORAGE_PATH', dirname(__DIR__) . '/' . ltrim($siteConfig['contact_storage_path'], '/'));

// ── Helper: config() ────────────────────────────────────────────────────────

/**
 * Retrieve a site configuration value by key.
 */
function config(string $key)
{
    global $siteConfig;
    return $siteConfig[$key] ?? null;
}
