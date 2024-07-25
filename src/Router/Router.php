<?php 

namespace App\Router;
use App\Exception\RouteNotFoundException;
use App\App\App;

class Router 
{
    private array $routes;
    private  $params;
    private  $rules; 

    public function register($path, callable|array $action, string $HTTPVerb, ?array $params = []): self
    {
        $this->routes[$HTTPVerb][$path] = $action;
        $this->params = $params;
        return $this;
    }

      public function getRoutes()
    {
        return $this->routes;
    }

    public function get($path, callable|array $action, ?array $params = [], ?array $rules =[] ): self
    {
        $this->register($path, $action, 'GET', $params, $rules);
        return $this;

    }

    public function post($path, callable|array $action, ?array $params = [], ?array $rules = []): self
    {
        $this->register($path, $action, 'POST', $params, $rules);
        return $this;
    }

     public function resolve(string $uri, string $HTTPVerb) : mixed
    {
        $path = explode('?', $uri)[0];
        $action = $this->routes[$HTTPVerb][$path] ?? null;

        if (is_callable($action)) {
            return $action();
        }
        if (is_array($action)) {
            [$className, $method] = $action;
            if (class_exists($className) && method_exists($className,$method)) {
                    $class = new $className();
                    return call_user_func_array([$class,$method], [$this->params]);
            }
        }
         throw new RouteNotFoundException();
    }


     public function run (  Router $router,  array $request) {
        try {
         echo $router->resolve($request['uri'], $request['method']);
        } catch (RouteNotFoundException $th) {
            echo $th->getMessage();
        }
    }

}

