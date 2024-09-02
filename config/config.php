<?php

// Site name
define('SITE_NAME', 'My Awesome Website');

// Base URL of the application
define('BASE_URL', 'http://localhost/my-website');

// Application environment ('development', 'production')
define('APP_ENV', 'development');

// Debug mode (true for development, false for production)
define('DEBUG_MODE', true);

// Error reporting settings
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Include the database connection
require_once __DIR__ . '/conn.php';