<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../public/config.php';
require_once __DIR__ . '/headers.php';
require_once __DIR__ . '/submit_storage.php';

header('Content-Type: application/json; charset=UTF-8');

// ── Only accept POST ────────────────────────────────────────────────────────

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed.']);
    exit;
}

// ── Rate limit ──────────────────────────────────────────────────────────────

$clientIp = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

if (!rate_limit_check($clientIp, 10, 3600)) {
    http_response_code(429);
    echo json_encode(['success' => false, 'error' => 'Too many requests. Please try again later.']);
    exit;
}

// ── CSRF verification ───────────────────────────────────────────────────────

$csrfToken = $_POST['csrf_token']
    ?? $_SERVER['HTTP_X_CSRF_TOKEN']
    ?? '';

if (!verify_csrf_token($csrfToken)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'error' => 'Invalid or expired security token. Please refresh the page and try again.']);
    exit;
}

// ── Allowed subject values ──────────────────────────────────────────────────

$allowedSubjects = [
    'General Inquiry',
    'Partnership',
    'Media',
    'Research',
    'Careers',
    'Other',
];

// ── Validate & sanitize ─────────────────────────────────────────────────────

$errors = [];

$name    = sanitize_input($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$company = sanitize_input($_POST['company'] ?? '');
$role    = sanitize_input($_POST['role'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = sanitize_input($_POST['message'] ?? '');

// Name
if ($name === '') {
    $errors['name'] = 'Name is required.';
} elseif (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    $errors['name'] = 'Name must be between 2 and 100 characters.';
}

// Email
if ($email === '') {
    $errors['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Company (optional)
if ($company !== '' && mb_strlen($company) > 100) {
    $errors['company'] = 'Company must be 100 characters or fewer.';
}

// Role (optional)
if ($role !== '' && mb_strlen($role) > 100) {
    $errors['role'] = 'Role must be 100 characters or fewer.';
}

// Subject
if ($subject === '') {
    $errors['subject'] = 'Subject is required.';
} elseif (!in_array($subject, $allowedSubjects, true)) {
    $errors['subject'] = 'Please select a valid subject.';
}

// Message
if ($message === '') {
    $errors['message'] = 'Message is required.';
} elseif (mb_strlen($message) < 10) {
    $errors['message'] = 'Message must be at least 10 characters.';
} elseif (mb_strlen($message) > 5000) {
    $errors['message'] = 'Message must be 5000 characters or fewer.';
}

// ── Return validation errors ────────────────────────────────────────────────

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// ── Store submission ────────────────────────────────────────────────────────

$submission = [
    'name'       => $name,
    'email'      => $email,
    'company'    => $company,
    'role'       => $role,
    'subject'    => $subject,
    'message'    => $message,
    'ip'         => $clientIp,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
    'submitted'  => date('c'),
];

$id = store_submission($submission);

if ($id === false) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Unable to save your message. Please try again later.']);
    exit;
}

// ── Optional email notification (placeholder) ───────────────────────────────
// When SMTP is enabled in config, send an email notification.
// Requires a mail library such as PHPMailer. Currently a no-op.

if (config('smtp_enabled')) {
    // TODO: Implement email sending via PHPMailer or similar.
    // Example:
    // $mail = new PHPMailer(true);
    // $mail->isSMTP();
    // $mail->Host       = config('smtp_host');
    // $mail->Port       = config('smtp_port');
    // $mail->Username   = config('smtp_user');
    // $mail->Password   = config('smtp_pass');
    // $mail->setFrom(config('smtp_from'), config('site_name'));
    // $mail->addAddress(config('contact_email'));
    // $mail->Subject    = "[Contact] {$subject}";
    // $mail->Body       = "From: {$name} <{$email}>\n\n{$message}";
    // $mail->send();
}

// ── Success ─────────────────────────────────────────────────────────────────

http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your message has been received.',
    'id'      => $id,
]);
