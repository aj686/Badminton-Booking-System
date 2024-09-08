<?php

namespace Aj686\BadmintonBookingSystem\Routes;

class Router {

    // store router in array
    private static array $routes = [];

    // add router
    public static function add(string $method, string $path, string $controller, string $function) {
        // URL Mapping
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run() {
        // Run the controller

        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if($path == $route['path'] && $method == $route['method']) { 
                
                // $controller save a controller namespace - UserController class
                // $function save a method named in controller - addingBoking() method
                // object->methodName
                $controller = new $route['controller'];
                $function = $route['function'];
                $controller->$function();
                
                return;
            }
        }

        http_response_code(404);
        echo 'Controller Not Found';
    }
}
