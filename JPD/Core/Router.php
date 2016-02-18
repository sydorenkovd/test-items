<?php

class Router
{
    protected $routes = [];
    protected $params = [];

    /*
     * @param string $route The rout Url
     * @param array $params (ctrl, action)
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    /*
     * return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function getParams()
    {
        return $this->params;
    }

}