<?php
// Site configuration
$site_name = 'Astrakit';
$site_description = 'Astrakit is a free and open-source chat app designed for seamless communication.';
$current_year = date('Y');

// Simple base URL handling that works in CLI and web environments
$base_url = 'astrakit.cc';

// Only try to parse REQUEST_URI when it exists (in web environments, not CLI)
if (isset($_SERVER['REQUEST_URI'])) {
    if (strpos($_SERVER['REQUEST_URI'], '404') !== false) {
        $base_url = '/';
    }
}
?>
