<?php
# front controller
include "bootstrap/init.php";
use App\Core\Routing\Route;

$router = new \App\Core\Routing\Router();
$router->run();

//$route = '/post/{slug}';
//$pattern = "/^" . str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route) . "$/";
//nice_dump($route);
//nice_dump($pattern);

//$route_pattern = "/^\/post\/(?<slug>[-%\w]+)$/";
//$uri1 = '/post/what-is-php';
//$uri2 = '/post/why-you-must-choose-7learn';
//$uri3 = '/product/course-php';
//
//$result = preg_match($route_pattern,$uri1,$matches);
//nice_dump($result);
//
//nice_dump($matches);