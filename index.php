<?php
session_start();

if (explode('.',  $_SERVER['HTTP_HOST'])[1] == 'local'){
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}

require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? ucfirst($_GET['ctrl']) : 'Index'; //контроллер
$action = !empty($_GET['act']) ? ucfirst($_GET['act']) : 'Default';//экшен

$controllerClassName = '\App\Controllers\\' . $ctrl;
$controller = new $controllerClassName();
$controller->action($action);