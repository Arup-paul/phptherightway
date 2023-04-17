<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ .'/../vendor/autoload.php';

 $invoice = new App\Invoice(15);
App\Invoice::process([1,2,3]);




