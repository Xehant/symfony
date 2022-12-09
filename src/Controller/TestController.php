<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class TestController
{
    public function index()
    {
        var_dump("Ca fonctionne");
        die();
    }
    public function test()
    {

        $request= Request::createFromGlobals();

        $age=$request->query->get('age', 0);
        //$age= 0;

       // if(!empty($_GET['age'])){
       // $age = $_GET['age'];
    
        dd("vous avez $age ans");
    }    
    }
