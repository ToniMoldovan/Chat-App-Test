<?php
namespace App\core;

class Router {
    private $routes = [];

    public function addRoute($route, $action) {
        $this->routes[$route] = $action;
    }

    public function dispatch($requestUri, $requestMethod) {
        if (array_key_exists($requestUri, $this->routes)) {
            $action = $this->routes[$requestUri];
            // $action is an array with two elements:
            // 1. The first element is the class name
            // 2. The second element is the method name

            $controllerClass = $action[0];
            $controllerMethod = $action[1];

            $controller = new $controllerClass();

            if ($requestMethod == 'POST') {
                $postData = $_POST;
                $controller->$controllerMethod($postData);
            } else {
                $controller->$controllerMethod();
            }
        } else {
            // Handle 404 - Not Found
            header("HTTP/1.0 404 Not Found");
            echo "404 - Not Found";
        }
    }
}