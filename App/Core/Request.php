<?php

namespace App\Core;
class Request{
    private $params;
    private $method;
    private $agent;
    private $ip;
    private $url;
    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->url = strtok($_SERVER['REQUEST_URI'], '?');
    }
    public function params(): array{
        return $this->params;
    }
    public function method(): mixed{
        return $this->method;
    }
    public function agent(): mixed{
        return $this->agent;
    }
    public function ip(): mixed{
        return $this->ip;
    }
    public function url(): mixed{
        return $this->url;
    }
    public function input($key){
        return $this->params[$key] ?? null;
    }
    public function isset($key){
        return isset($this->params[$key]);
    }
    public function redirect($route){
        header("Location: " . site_url($route));
        die();
    }
}