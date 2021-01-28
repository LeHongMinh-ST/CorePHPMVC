<?php

namespace app\Controllers;

use app\Core\Controller;

class HomeController extends Controller
{

    public function index()
    {

        return $this->views("home");
    }

}