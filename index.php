<?php
# front controller
include "bootstrap/init.php";
use App\Core\Routing\Route;

//$user_data = [
//    'id' => rand(5, 1000),
//    'title' => "Sara"
//];
//
//$userModel = new \App\Models\User();
//$userModel->create($user_data);
//$user = $userModel->getAll();
//var_dump($user);
//$router = new \App\Core\Routing\Router();
//$router->run();

//$productModel = new \App\Models\Product();
//$productModel->create($user_data);
//for($i = 1; $i <= 20; $i++){
//    $productModel->create([
//        'id' => $i,
//        'title' => "Product-$i"
//    ]);
//}
//var_dump($productModel->getAll());
//var_dump($_ENV['DB_NAME']);