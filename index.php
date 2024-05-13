<?php



// const BASE_PATH = __DIR__ . './';


require 'core/functions.php';


spl_autoload_register(function($class){

   $class = str_replace('\\', '/', $class);
   return require base_path("{$class}.php");
});

require 'bootstrap.php';


$router = new core\Router;



require 'routes.php';




$uri = parse_url($_SERVER['REQUEST_URI'])['path'];




$method= $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->routeToController($uri,$method);

