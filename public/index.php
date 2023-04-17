<?php

use App\Toaster;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ .'/../vendor/autoload.php';

$toaster = new \App\ToasterPro();

$toaster->addSlice('Bread');
$toaster->addSlice('Bread');
$toaster->addSlice('Bread');
$toaster->addSlice('Bread');
$toaster->addSlice('Bread');
$toaster->toastBagel();






