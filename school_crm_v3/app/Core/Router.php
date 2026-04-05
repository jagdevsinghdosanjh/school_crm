<?php
// app/Core/Router.php

require_once __DIR__ . '/Helpers.php';
require_once __DIR__ . '/Session.php';

class Router
{
    private array $routes = [];

    public function get(string $path, $callback): void
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post(string $path, $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Adjust base path for v3
        $uri = str_replace('/school_crm/school_crm_v3/public', '', $uri);
        if ($uri === '') {
            $uri = '/';
        }

        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];

            if (is_callable($callback)) {
                call_user_func($callback);
                return;
            }

            if (is_string($callback) && strpos($callback, '@') !== false) {
                $this->callController($callback);
                return;
            }
        }

        http_response_code(404);
        echo "<h2>404 - Page Not Found</h2>";
    }

    private function callController(string $callback): void
    {
        [$controllerName, $method] = explode('@', $callback);
        $controllerFile = __DIR__ . '/../Controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            die("Controller not found: {$controllerName}");
        }

        require_once $controllerFile;

        if (!class_exists($controllerName)) {
            die("Controller class missing: {$controllerName}");
        }

        $controller = new $controllerName();

        if (!method_exists($controller, $method)) {
            die("Method {$method} not found in controller {$controllerName}");
        }

        $controller->$method();
    }
}
