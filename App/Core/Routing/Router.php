<?php

namespace App\Core\Routing;

use \App\Core\Request;

class Router{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = '\App\Controllers\\';

    public function __construct(){
        $this->request = new Request();
        $this->routes = Route::routes();
        var_dump($this->findRoute($this->request) ?? null);
        $this->current_route = $this->findRoute($this->request) ?? null;
        # run middleware here
//        $this->run_global_middleware();
//        $this->run_route_middleware();
    }
    private function run_route_middleware(){
        $middleware = $this->current_route['middleware'];
        foreach ($middleware as $middleware_class){
            $middleware_obj = new $middleware_class;
            $middleware_obj->handle();
        }
    }
    public function findRoute(Request $request){
        foreach ($this->routes as $route){
            if (!in_array($request->method(),$route['methods'])){
                return false;
            }
            if ($this->regex_matched($route)){
                return $route;
            }
        }
        return null;
    }
    public function regex_matched($route){
        global $request;
        $pattern = "/^" . str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route['url']) . "$/";
        $result = preg_match($pattern,$this->request->url(),$matches);
        if (!$result){
            return false;
        }
        foreach ($matches as $key => $value){
            if (!is_int($key)){
                $request->add_route_param($key,$value);
            }
        }
        return true;
    }
    public function dispatch404(){
        header("HTTP/1.1 404 Not Found");
        view('errors.404');
        die();
    }

    public function run(){
        # 404 : url not exists
        if(is_null($this->current_route)){
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);
    }

    private function dispatch($route){
        $action = $route['action'];
        # action : null
        if (empty($action)){
            return;
        }
        # action : clousure
        if (is_callable($action)){
            $action();
            // call_user_func($action);
        }
        # action : Controller@method
        if (is_string($action)){
            $action = explode('@',$action);
        }
        # action : ['Controller','method']
        if (is_array($action)){
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if (!class_exists($class_name)){
                throw new \Exception("Class $class_name Not Exists!");
            }
            $controller = new $class_name();
            if (!method_exists($controller,$method)){
                throw new \Exception("Method $method Not Exists in class $class_name!");
            }
            $controller->{$method}();

        }
    }
}