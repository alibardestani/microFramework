<?php
# front controller
include "bootstrap/init.php";
use App\Core\Routing\Route;

$router = new \App\Core\Routing\Router();
$router->run();
