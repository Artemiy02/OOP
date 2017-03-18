<?php

require_once __DIR__ . './autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

$ctrl = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'News';
$act = !empty($pathParts[3]) ? ucfirst($pathParts[3]) : 'All';

$controllerName = $ctrl . 'Controller';


try{
 $method = 'action'. $act;
 $controller = new $controllerName;
 $controller->$method();
} catch (Exception $e) {
  $view = new View();
  $view->error = $e->getMessage();
  $view->display('error.php');
}
