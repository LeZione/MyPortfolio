<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Route requests to the appropriate PHP files
if ($request_uri === '/myProfile') {
    require __DIR__ . '/../public/pages/myProfile.php';
} else {
    require __DIR__ . '/../public/index.php';
}
