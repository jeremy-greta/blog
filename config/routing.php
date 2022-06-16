<?php
// Routing
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

switch ($page) {
    case 'home':
        include ('src/Controller/HomeController.php');
        break;
    case 'contact':
        echo $twig->render('contact.twig');
        break;
    case 'about':
        echo $twig->render('about.twig');
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
        break;
}
