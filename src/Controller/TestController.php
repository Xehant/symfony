<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $tva=$this->calculator =$calculator;
    }

    public function index()
    {
        $tva =$this->calculator->calcul(100);
        dump($tva);
        dd("Ca fonctionne");
        
    }
    public function test(Request $request,$age)
    {
    return new Response("vous avez $age ans");
       
    }
}