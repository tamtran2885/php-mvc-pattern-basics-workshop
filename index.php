<?php

require_once "config/constants.php";
require_once "config/db.php";

if (isset($_GET['controller']))
{
    $controller = getControllerPath($_GET['controller']);
    $fileExists = file_exists($controller);

    if ($fileExists) {
        require_once $controller;
    } else {
        $errorMsg = "The page you are trying to access does not exists.";
        require_once VIEWS . "error/error.php";
    }
} else {
    require_once VIEWS . "login/loginDashboard.php";
}

function getControllerPath($controller): string
{
    return CONTROLLERS . $controller . "Controller.php";
}



