<?php
//ouverture de session
session_start();

//autoloader
require('Model/Autoloader.php');
Autoloader::register();

//routeur
$router = new Router();
$router->routerRequete();