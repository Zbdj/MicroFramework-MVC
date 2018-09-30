<?php

namespace Core;

class Core {
    public function run()
    {
        include('routes.php');
       // echo __CLASS__ . " [OK]" . PHP_EOL;
       //var_dump($_SERVER['REQUEST_URI']);
        $url = substr($_SERVER['REQUEST_URI'], strlen(BASE_URI));
        // var_dump($url);
        $route = Router::get($url);
        // var_dump($route);
        // var_dump($url);

        $controller = "Controller\\" . ucfirst($route["controller"]) . "Controller";
        $action = $route['action'] . "Action";
        $app = new $controller();
        $app->$action();
        // var_dump($action);
        // var_dump($url);

    }
}