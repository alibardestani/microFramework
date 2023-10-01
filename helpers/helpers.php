<?php

function site_url($route){
    return $_ENV['HOST'] . $route;
}

function asset_url($route){
    return site_url("assets/" . $route);
}

function random_element($arr){
    shuffle($arr);
    return array_pop($arr);
}
function view($path){
    $path = str_replace('.','/',$path);
    $view_full_path = BASEPATH . "views/$path.php";
    include_once $view_full_path;
}