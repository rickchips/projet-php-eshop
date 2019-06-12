<?php
namespace src\Utilities;



class Router
{
    /**
     * @var array
     */
    private $routes;

    /**
     * @param string $url
     * @param string $file
     */
    public function addRoute(string $url, string $file) : void
    {
        $this->routes[] = [
            'url'=>$url,
            'template'=>$file
        ];
    }

    /**
     * @return string|null
     */
    public function match() : ?string
    {
        $url = $_SERVER['REQUEST_URI'];


        foreach ($this->routes as $route){

            if($route['url'] === $url){
                return $route['template'];
            }
    }
        return null;
    }
}