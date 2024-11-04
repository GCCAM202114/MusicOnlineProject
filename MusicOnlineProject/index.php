<?php

// Get the requested URL from the 'url' query parameter
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Define available routes (URL => corresponding PHP file)
$routes = [
    '' => 'Public/index.php',          // Home route
    'vinyl' => 'Public/vinyl.php',          // Home route
    'register' => 'Public/Register/index.php',    // register page route
    'login' => 'Public/Login/index.php', // login page route
    'admin' => 'Public/Admin/index.php', // admin page route
    'user' => 'Public/Users/index.php', // user page route
    'uploads' => 'Public/User/upload.php', // upload page route
    'account' => 'Public/User/account.php', // account page route
    'allUsers' => 'Public/Admin/allUsers.php', // allusers page route
    'pending' => 'Public/Admin/pending.php', // pending page route
    // config routes
    'authenticate' => 'Public/Login/authenticate.php', // logging in user page config route
    'registerConfig' => 'Public/Register/register.php', // registering user page config route
    'uploadConfig' => 'Public/User/uploadConfig.php', // pending page route
    'logout' => 'Public/logout.php', // pending page route

];

// Check if the URL matches a route
if (array_key_exists($url, $routes)) {
    require $routes[$url];  // Load the appropriate file for the route
} else {
    // If no route matches, show a 404 page
    require '404.php';
}
// 
?>