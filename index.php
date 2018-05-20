<?php
session_start();

error_reporting(E_ALL);

require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? ucfirst($_GET['ctrl']) : 'Index'; //контроллер
$action = !empty($_GET['act']) ? ucfirst($_GET['act']) : 'Default';//экшен

$controllerClassName = '\App\Controllers\\' . $ctrl;
$controller = new $controllerClassName();
$controller->action($action);