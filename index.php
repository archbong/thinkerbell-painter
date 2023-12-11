<?php
// Fetch the URL parameter
$url = isset($_GET['url']) ? $_GET['url'] : 'index';
echo "Requested URL: $url";

// Define your routes
$routes = [
    'index' => 'views/index.php',
    'about' => 'views/about.php',
    'portfolio' => 'views/portfolio.php',
    'contact' => 'views/contact.php',
    'testimonials' => 'views/testimonials.php',
    'quotation' => 'views/quotation.php',
];

// Check if the requested route exists
if (array_key_exists($url, $routes)) {
    include($routes[$url]);
} else {
    // Handle 404 Not Found
    include('views/404.php');
}
