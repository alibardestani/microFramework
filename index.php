<?php
# front controller
include "bootstrap/init.php";
use App\Core\Routing\Route;
use App\Models\User;

//$user_data = [
//    'name' => 'Sara',
//    'email' => 'Sara@7learn.com',
//    'password' => '123456'
//];

//$userModel = new User();
//$user = $userModel->get((array)'id', ['id' => '17']);
//var_dump($user);
//$productModel = new \App\Models\Product();
//for($i = 1; $i <= 7; $i++){
//    $productModel->create([
//        'title' => "Product-$i",
//        'price' => rand(1, 100) * 100
//    ]);
//}
$router = new \App\Core\Routing\Router();
$router->run();
