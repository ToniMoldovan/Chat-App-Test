<?php

namespace App\controller;

class HomeController
{
    public function index()
    {
        require_once __DIR__ . '/../view/homepage.php';
    }
}