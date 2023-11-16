<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;


class HomeController{
    #[Route('/')]
    function index(){
        die("Hello word");
    }
}
