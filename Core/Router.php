<?php
namespace Core;

class Router{
    private static $routes;
    public static function connect($url, $route){
        self::$routes[$url] = $route;
    }

    public static function get($url){
          //  var_dump($url);

            if (isset(self::$routes[$url]))
            {
                return self::$routes[$url];
            } 
            else
            {
                // return ['controller' => 'error', 'action' => 'error'];
                include('src/View/Error/404.php');
                // echo "Erreur 404 ! Cette route n'existe pas";
            }
    }
    
}
?>