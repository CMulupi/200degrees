<?php
namespace core;

class Router {

   protected $routes=[];

   public function get($uri,$controller){
    
    $this->routes[]=[
        'uri' => $uri,
        'controller' => $controller,
        'method' => 'GET'
    ];
   }
   public function post($uri,$controller){
    $this->routes[]=[
        'uri' => $uri,
        'controller' => $controller,
        'method' => 'POST'
    ];
   }
   public function put($uri,$controller){
    $this->routes[]=[
        'uri' => $uri,
        'controller' => $controller,
        'method' => 'PUT'
    ];
   }
   public function delete($uri,$controller){
    $this->routes[]=[
        'uri' => $uri,
        'controller' => $controller,
        'method' => 'DELETE'
    ];
   }
   public function routeToController($uri,$method){

    foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === $method){
                return require "{$route['controller']}";
            }
    }
    //if execution gets to this point then route not found
    //abort
   }
}