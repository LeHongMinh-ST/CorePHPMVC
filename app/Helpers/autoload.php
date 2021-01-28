<?php
$autoload = function ($classname) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $classname);
    require_once  $className . '.php';
};

spl_autoload_register($autoload);
