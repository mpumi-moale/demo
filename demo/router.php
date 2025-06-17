<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// This router does not work for the about page and contact page
$routes = [
    '/websites/demo/index.php' => 'controller/index.php',
    '/websites/demo/about.php' => 'controller/about.php',
    '/websites/demo/notes.php' => 'controller/notes.php',
    '/websites/demo/note.php' => 'controller/note.php',
    '/websites/demo/contact.php' => 'controller/contact.php'
    
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);

