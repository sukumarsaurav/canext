<?php
/**
 * Main configuration file for the CANEXT website
 * Contains global settings and path definitions
 */

// Site info
define('SITE_NAME', 'CANEXT Immigration Consultancy');
define('SITE_DESCRIPTION', 'Expert Canadian immigration consultancy services for study permits, work permits, express entry, and more.');

// Path settings
define('SITE_ROOT', '/'); // Change this if site is in a subdirectory
define('CSS_PATH', SITE_ROOT . 'css/');
define('JS_PATH', SITE_ROOT . 'js/');
define('IMAGES_PATH', SITE_ROOT . 'images/');

// Email settings
define('ADMIN_EMAIL', 'contact@canext.com');
define('CONTACT_EMAIL', 'info@canext.com');

// Social media
define('FACEBOOK_URL', 'https://facebook.com/canextimmigration');
define('TWITTER_URL', 'https://twitter.com/canextimmigration');
define('INSTAGRAM_URL', 'https://instagram.com/canextimmigration');
define('LINKEDIN_URL', 'https://linkedin.com/company/canextimmigration');

/**
 * Get the appropriate resource URL based on directory depth
 * @param string $path - path relative to site root
 * @return string - correct path for current location
 */
function get_resource_url($path) {
    $path = ltrim($path, '/');
    $current_path = $_SERVER['PHP_SELF'];
    
    if (strpos($current_path, '/visa-types/') !== false || 
        strpos($current_path, '/blog/') !== false || 
        strpos($current_path, '/resources/') !== false ||
        strpos($current_path, '/assessment-calculator/') !== false) {
        return '../' . $path;
    } else if (strpos($current_path, '/immigration-news/') !== false) {
        return '/' . $path;
    } else {
        return './' . $path;
    }
} 