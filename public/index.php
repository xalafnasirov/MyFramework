<?php
// public/index.php

// Include configuration and shared code
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';

// Define routes
$routes = [
    '' => 'home.php',
    'home' => 'home.php',
    'blogs/add' => 'blogs_add.php',
    // Add more routes here
];

// Get the requested path, or default to the home page

// On de[loy]
//$requestPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// On localhost
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $uri . "<br>";
$basePath = '/WebsiteFramework'; // Set your base path here
echo $basePath . "<br>";
$requestPath = trim(str_replace($basePath, '/', $uri), '/');
echo $requestPath . "<br>";

// Determine the page file based on the route
$pageFile = isset($routes[$uri]) ? $routes[$uri] : '404.php';

echo $pageFile . "<br>";
echo __DIR__ . "/$pageFile" . "<br>";


// Include the header
require_once __DIR__ . '/../includes/header.php';

// Include the page content
if (file_exists(__DIR__ . "/$pageFile")) {
    include __DIR__ . "/$pageFile";
} else {
    include __DIR__ . "/404.php"; // Fallback to a 404 page
}

// Include the footer
require_once __DIR__ . '/../includes/footer.php';