<?php

require_once 'vendor/autoload.php';
// include_once('test_session.php');



// Rendu du template
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' =>  false,
    // 'cache' =>  __DIR__ . '/tmp',
]);
include_once('config/pdo_connect.php');
include ('config/routing.php');