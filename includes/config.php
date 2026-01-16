<?php
/**
 * PFOPL Website Configuration
 * Parshwanath Formatting OPC Pvt Ltd
 */

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Site Configuration
define('SITE_NAME', 'Parshwanath Formatting OPC Pvt Ltd');
define('SITE_SHORT_NAME', 'PFOPL');
define('SITE_URL', 'https://pfopl.com');
define('SITE_TAGLINE', 'Precision. Speed. Results.');
define('SITE_DESCRIPTION', 'Professional digital services company offering CV formatting, web development, SEO and graphic design to recruitment agencies worldwide.');

// Contact Information
define('CONTACT_EMAIL', 'info@pfopl.com');
define('CONTACT_PHONE', '+91 98253 54712');
define('CONTACT_PHONE_LINK', '+919825354712');

// Address
define('ADDRESS_STREET', 'C-5 Pushkraj Society, Gotri Road');
define('ADDRESS_CITY', 'Vadodara');
define('ADDRESS_STATE', 'Gujarat');
define('ADDRESS_POSTCODE', '390023');
define('ADDRESS_COUNTRY', 'India');
define('ADDRESS_FULL', ADDRESS_STREET . ', ' . ADDRESS_CITY . '-' . ADDRESS_POSTCODE . ', ' . ADDRESS_STATE . ', ' . ADDRESS_COUNTRY);

// Social Media Links
define('SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/pfopl');
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/pfopl');

// Company Info
define('COMPANY_FOUNDED', '2016');
define('COMPANY_CLIENTS', '200+');
define('COMPANY_EXPERIENCE', '9+');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'pfopl_website');
define('DB_USER', 'your_db_username');
define('DB_PASS', 'your_db_password');
define('DB_CHARSET', 'utf8mb4');

// Database connection function
function getDBConnection() {
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (PDOException $e) {
        error_log('Database connection failed: ' . $e->getMessage());
        return false;
    }
}

// CSRF Token Functions
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Sanitise input function
function sanitiseInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// Validate email function
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Get current page URL
function getCurrentURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

// Services array for navigation and listings
$services = [
    [
        'slug' => 'cv-formatting',
        'title' => 'CV Formatting',
        'short_title' => 'CV Formatting',
        'description' => 'Professional CV and resume formatting with 1-3 hour turnaround time.',
        'icon' => 'fa-file-alt',
        'featured' => true
    ],
    [
        'slug' => 'web-development',
        'title' => 'Web Design & Development',
        'short_title' => 'Web Development',
        'description' => 'Custom responsive websites with modern design and SEO-friendly structure.',
        'icon' => 'fa-laptop-code',
        'featured' => true
    ],
    [
        'slug' => 'web-applications',
        'title' => 'Web Application Development',
        'short_title' => 'Web Applications',
        'description' => 'Bespoke web applications tailored to your specific business needs.',
        'icon' => 'fa-cogs',
        'featured' => true
    ],
    [
        'slug' => 'social-media',
        'title' => 'Social Media Management',
        'short_title' => 'Social Media',
        'description' => 'Complete social media management including content creation and engagement.',
        'icon' => 'fa-share-alt',
        'featured' => true
    ],
    [
        'slug' => 'graphic-design',
        'title' => 'Graphic Design',
        'short_title' => 'Graphic Design',
        'description' => 'Creative graphic design for branding, marketing materials and digital assets.',
        'icon' => 'fa-paint-brush',
        'featured' => true
    ],
    [
        'slug' => 'data-processing',
        'title' => 'Data Processing',
        'short_title' => 'Data Processing',
        'description' => 'Accurate data processing, entry and conversion services with quality assurance.',
        'icon' => 'fa-database',
        'featured' => true
    ],
    [
        'slug' => 'seo',
        'title' => 'SEO Services',
        'short_title' => 'SEO',
        'description' => 'Search engine optimisation to improve your website visibility and rankings.',
        'icon' => 'fa-search',
        'featured' => false
    ]
];

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
