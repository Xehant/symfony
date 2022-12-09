<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }



    public function hello($prenom = "World")
    {
        
        return new Response("Hello $prenom");
    }
}