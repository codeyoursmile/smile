<?php
namespace Core;

class Router {
    public function dispatch() {
        $route = $_GET['route'] ?? 'home/index';
        $parts = explode('/', trim($route, '/'));

        $controllerName = ucfirst($parts[0]) . 'Controller';
        $actionName = $parts[1] ?? 'index';

        $controllerClass = '\\App\\Controllers\\' . $controllerName;

        if (!class_exists($controllerClass)) {
            die("Controller $controllerClass not found.");
        }

        $controller = new $controllerClass();
        if (!method_exists($controller, $actionName)) {
            die("Method $actionName not found in $controllerClass.");
        }

        $controller->$actionName();
    }
}
