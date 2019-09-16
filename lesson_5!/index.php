<?php

include_once "controllers/Main.php";
include_once "controllers/Profile.php";
include_once "vendor/autoload.php";

$controllerName = 'Ctrl'.ucfirst(!empty($_GET['ctrl']) ? $_GET['ctrl'] : 'Main');
$actionName = 'action'.ucfirst(!empty($_GET['action']) ? $_GET['action'] : 'index');

if ($controllerName && class_exists($controllerName) && method_exists($controllerName, $actionName)) {
    call_user_func_array(array($controllerName, $actionName), array());
}
else {
    header('Location: /lesson_5/?ctrl=404',true, 301);
}


