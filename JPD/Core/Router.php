<?php

class Router
{
    protected $routes = [];
    protected $params = [];

    /*
     * @param string $route The rout Url
     * @param array $params (ctrl, action)
     */
    public function add($route, $params = [])
    {
        //convert the rule to a regular expression
        $route = preg_replace('/\//', '\\/', $route);
        //convert variables {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\l>[a-z-]+)', $route);
        //add start and end delimiters
        $route = '/^' . $route . '$/i';
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
        /*
         * match for URL format controller/action
         */
//        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }
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