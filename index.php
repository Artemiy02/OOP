<?php

require_once __DIR__ . './autoload.php';
 $controllerName = isset($_GET['ctrl']) ? $_GET['ctrl'] . 'Controller' : 'NewsController';
 $action = isset($_GET['act']) ? $_GET['act'] : 'All';
 $method = 'action'.$action;
 $controller = new $controllerName;
 $controller->$method();
