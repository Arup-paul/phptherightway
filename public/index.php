<?php


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ .'/../vendor/autoload.php';

$invoice = new App\Invoice();

$invoice->process(1,"some");



//$invoice->amount = 100;
//var_dump(isset($invoice->amount));
//
//unset($invoice->amount);
//
//var_dump(isset($invoice->amount));





