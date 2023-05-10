<?php


use App\App;
use App\Config;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ .'/../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('VIEW_PATH',__DIR__ .'/../views');

session_start();

$router = new \App\Router();


$router->get('/', [\App\Controller\HomeController::class, 'index'])
        ->get('/invoice', [\App\Controller\InvoiceController::class, 'index'])
        ->get('/invoice/create', [\App\Controller\InvoiceController::class, 'create']);





(new App($router,[
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
],
   new Config($_ENV)
))->run();

