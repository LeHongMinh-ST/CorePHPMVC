<?php

namespace app\Core;

class Controller
{
    public function getController($controllers)
    {
        require_once "app/Controllers/" . $controllers . ".php";
        return new $controllers;
    }

    public function views($views, $data = [])
    {
        extract($data);
        require_once "./app/Views/" . $views . ".php";
    }

    public function redirect($path)
    {
        header("location: $path");
    }
}

?>