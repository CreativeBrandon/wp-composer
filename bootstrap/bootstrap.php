<?php
/**
*   Bootstrap app
**/ 

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
$root_dir = ROOT;

// Register composer autoloader
require $root_dir . "/vendor/autoload.php";

// Expose global env() function
Env::init();

// Load Env vars
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
    //$dotenv->required(['DB_NAME', 'DB_USER', 'DB_PASSWORD', 'WP_HOME', 'WP_SITEURL']);
}
