<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function hw(){
        echo "Hello World";
     }

     public function hwjson(){
        echo json_decode("Hello World");
     }
}
