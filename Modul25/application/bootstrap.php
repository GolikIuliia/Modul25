<?php
session_start();
include './app/db.php';
include './app/functions.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';

$routes = explode('/', $_SERVER['REQUEST_URI']);
if(empty($routes[3])){

} else {Route::start();}



?>