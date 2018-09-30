<?php

    define('BASE_URI', str_replace('\\', '/', substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
    require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

    // $test = $_SERVER['REQUEST_URI'] . '/';
    // $url = str_replace( BASE_URI , '' , $test);
    // $split_url = explode('/', $url);

    // if($split_url[2])
    // {
    //     $action = $split_url[2] . 'Action';
    //     //var_dump($action);
    //     //$controller = ucfirst($split_url[1]) . 'Controller';
    //     $a = new Controller\UserController();
    //     $a->$action();
    // }

    $app = new Core\Core();
    $app->run();
    
    // $b = new src\AppController();
    // $b->indexAction();

?>