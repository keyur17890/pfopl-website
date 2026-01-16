<?php
/**
 * Contact Form Handler
 * Handles both contact and quote form submissions
 * Parshwanath Formatting OPC Pvt Ltd
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/config.php';

// Set JSON response header
header('Content-Type: application/json');

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed.'
    ]);
    exit;
}

// Validate CSRF token
$csrf_token = $_POST['csrf_token'] ?? '';
if (!validateCSRFToken($csrf_token)) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'message' => 'Invalid security token. Please refresh the page and try again.'
    ]);
    exit;
}

// Collect and sanitise form data
$form_type = sanitiseInput($_POST['form_type'] ?? 'contact');
$name = sanitiseInput($_POST['name'] ?? '');
$email = sanitiseInput($_POST['email'] ?? '');
$phone = sanitiseInput($_POST['phone'] ?? '');
$company = sanitiseInput($_POST['company'] ?? '');
$service = sanitiseInput($_POST['service'] ?? '');
$budget = sanitiseInput($_POST['budget'] ?? '');
$message = sanitiseInput($_POST['message'] ?? '');
$how_found = sanitiseInput($_POST['how_found'] ?? '');

// Validate required fields
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}

if (empty($email)) {
    $errors[] = 'Email is required.';
} elseif (!validateEmail($email)) {
    $errors[] = 'Please enter a valid email address.';
}

if (empty($message)) {
    $errors[] = 'Message is required.';
}

// For quote form, service is required
if ($form_type === 'quote' && empty($service)) {
    $errors[] = 'Please select a service.';
}

// Return errors if validation fails
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// Prepare data for database
$submission_data = [
    'form_type' => $form_type,
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'company' => $company,
    'service' => $service,
    'budget' => $budget,
    'message' => $message,
    'how_found' => $how_found,
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
    'submitted_at' => date('Y-m-d H:i:s')
];

// Try to save to database
$db_saved = false;
$db = getDBConnection();

if ($db) {
    try {
        // Create table if it doesn't exist
        $create_table_sql = "
            CREATE TABLE IF NOT EXISTS form_submissions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                form_type VARCHAR(50) NOT NULL,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(50),
                company VARCHAR(255),
                service VARCHAR(100),
                budget VARCHAR(50),
                message TEXT NOT NULL,
                how_found VARCHAR(100),
                ip_address VARCHAR(45),
                user_agent TEXT,
                submitted_at DATETIME NOT NULL,
                is_read TINYINT(1) DEFAULT 0,
                notes TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ";
        $db->exec($create_table_sql);

        // Insert submission
        $insert_sql = "
            INSERT INTO form_submissions
            (form_type, name, email, phone, company, service, budget, message, how_found, ip_address, user_agent, submitted_at)
            VALUES
            (:form_type, :name, :email, :phone, :company, :service, :budget, :message, :how_found, :ip_address, :user_agent, :submitted_at)
        ";

        $stmt = $db->prepare($insert_sql);
        $stmt->execute([
            ':form_type' => $submission_data['form_type'],
            ':name' => $submission_data['name'],
            ':email' => $submission_data['email'],
            ':phone' => $submission_data['phone'],
            ':company' => $submission_data['company'],
            ':service' => $submission_data['service'],
            ':budget' => $submission_data['budget'],
            ':message' => $submission_data['message'],
            ':how_found' => $submission_data['how_found'],
            ':ip_address' => $submission_data['ip_address'],
            ':user_agent' => $submission_data['user_agent'],
            ':submitted_at' => $submission_data['submitted_at']
        ]);

        $db_saved = true;
    } catch (PDOException $e) {
        error_log('Database error: ' . $e->getMessage());
    }
}

// Send email notification
$email_sent = false;

// Build email content
$subject = $form_type === 'quote'
    ? 'New Quote Request from ' . $name
    : 'New Contact Form Submission from ' . $name;

$email_body = "
New {$form_type} form submission received:\n
----------------------------------------\n
Name: {$name}\n
Email: {$email}\n
Phone: {$phone}\n
";

if (!empty($company)) {
    $email_body .= "Company: {$company}\n";
}

if (!empty($service)) {
    $email_body .= "Service: {$service}\n";
}

if (!empty($budget)) {
    $email_body .= "Budget: {$budget}\n";
}

$email_body .= "
----------------------------------------\n
Message:\n
{$message}\n
----------------------------------------\n
";

if (!empty($how_found)) {
    $email_body .= "Found us via: {$how_found}\n";
}

$email_body .= "
Submitted: {$submission_data['submitted_at']}\n
IP Address: {$submission_data['ip_address']}\n
";

// Set email headers
$headers = [
    'From' => 'noreply@pfopl.com',
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => 'text/plain; charset=UTF-8'
];

$header_string = '';
foreach ($headers as $key => $value) {
    $header_string .= "{$key}: {$value}\r\n";
}

// Try to send email
$email_sent = @mail(CONTACT_EMAIL, $subject, $email_body, $header_string);

// Log submission if database and email both failed
if (!$db_saved && !$email_sent) {
    // Log to file as backup
    $log_file = __DIR__ . '/../logs/form_submissions.log';
    $log_dir = dirname($log_file);

    if (!is_dir($log_dir)) {
        mkdir($log_dir, 0755, true);
    }

    $log_entry = date('Y-m-d H:i:s') . ' | ' . json_encode($submission_data) . "\n";
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}

// Send auto-reply to user
$auto_reply_subject = "Thank you for contacting PFOPL";
$auto_reply_body = "
Dear {$name},

Thank you for reaching out to Parshwanath Formatting OPC Pvt Ltd.

We have received your " . ($form_type === 'quote' ? 'quote request' : 'message') . " and our team will review it shortly. You can expect a response within 24 hours during business days.

If you have any urgent requirements, please feel free to call us at " . CONTACT_PHONE . ".

Best regards,
The PFOPL Team

---
Parshwanath Formatting OPC Pvt Ltd
" . CONTACT_EMAIL . "
" . SITE_URL . "
";

$auto_reply_headers = [
    'From' => CONTACT_EMAIL,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => 'text/plain; charset=UTF-8'
];

$auto_reply_header_string = '';
foreach ($auto_reply_headers as $key => $value) {
    $auto_reply_header_string .= "{$key}: {$value}\r\n";
}

@mail($email, $auto_reply_subject, $auto_reply_body, $auto_reply_header_string);

// Generate new CSRF token for next submission
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// Return success response
echo json_encode([
    'success' => true,
    'message' => 'Thank you for your message. We will get back to you within 24 hours.',
    'new_csrf_token' => $_SESSION['csrf_token']
]);
