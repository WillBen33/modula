<?php

namespace Controllers;

class IndexController
{
    public function index()
    {
        require('views/home.php');
    }

    public function logout()
    {
        require('views/logout.php');
    }
}