<?php

declare(strict_types=1);

namespace App\Controller;


use App\App;
use App\Models\User;
use App\View;

class HomeController
{
   public function index(): View
   {

       $db = App::db();



         $email = "up@doe.com";
       $name = "john doe";

       $userModel = new User();
       $userModel->create($email,$name);




     return View::make('index',[
            'name' => 'John Doe'
     ]);
   }
}