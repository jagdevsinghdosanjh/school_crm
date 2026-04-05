<?php
// app/Core/Router.php

require_once __DIR__ . '/Helpers.php';
require_once __DIR__ . '/Session.php';

class Router
{
    private $routes = [];

    /**
     * Register a GET route
     */
    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    /**
     * Register a POST route
     */
    public function post($path, $callback)
    {
        $this->routes['POST'][$path] = $callback;
    }

    /**
     * Dispatch the route
     */
    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Remove /public prefix if using WAMP
        $uri = str_replace('/school_crm/public', '', $uri);

        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];

            if (is_callable($callback)) {
                return call_user_func($callback);
            }

            // Controller@method format
            if (is_string($callback) && strpos($callback, '@') !== false) {
                return $this->callController($callback);
            }
        }

        // 404 fallback
        http_response_code(404);
        echo "<h2>404 - Page Not Found</h2>";
        exit();
    }

    /**
     * Execute controller method
     */
    private function callController($callback)
    {
        list($controllerName, $method) = explode('@', $callback);

        $controllerFile = __DIR__ . '/../Controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            die("Controller not found: $controllerName");
        }

        require_once $controllerFile;

        if (!class_exists($controllerName)) {
            die("Controller class missing: $controllerName");
        }

        $controller = new $controllerName();

        if (!method_exists($controller, $method)) {
            die("Method $method not found in controller $controllerName");
        }

        return $controller->$method();
    }
}
