<?php


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ .'/../vendor/autoload.php';


$fields = [
    new  App\Text('textField'),
    new  App\Radio('radioField'),
    new  App\Checkbox('checkboxField'),
    new  App\Boolean('boolean'),
    new  App\Checkbox('checkboxField'),
    new  App\Radio('radio'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br />';
}






