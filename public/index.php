<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
  $page = $_GET['p'];
}else{
  $page = 'personnels.home';
}

$page = explode('.', $page);
if($page[0] == 'admin'){
  $controller = '\app\Controller\Admin\\' . ucfirst($page[1]) . 'controller';
  $action = $page[2];
}
else if($page[0] == 'user'){
  $controller = '\App\Controller\User\\' . ucfirst($page[1]) . 'Controller';
  $action = $page[2];
}else{
  $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
  $action = $page[1];
}

$controller = new $controller();
$controller->$action();
