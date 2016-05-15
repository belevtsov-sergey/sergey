<?php
require_once 'controller/route.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($url){
    case '/':
        index(); break;
    case '/about':
        about(); break;
    case '/galleries':
        galleries(); break;
    case '/graphics':
        graphics(); break;
    case '/painting':
        painting(); break;
    default:
        header("HTTP/1.1 400 Bad request");
        echo "<h1>Bad request</h1>";
        echo "Your browser sent a request that this server could not understand.";
        break;
}

