<?php


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ .'/../vendor/autoload.php';

define('VIEW_PATH',__DIR__ .'/../views');

session_start();


 $route = new App\Router();


$route->get('/',[\App\Controller\HomeController::class,'index'])
   ->get('/invoice',[\App\Controller\InvoiceController::class,'index'])
   ->get('/invoice/create',[\App\Controller\InvoiceController::class,'create']);




echo $route->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));


