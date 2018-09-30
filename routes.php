<?php
use \Core\Router;

namespace Core;

Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/user/remove', ['controller' => 'user', 'action' => 'remove']);
Router::connect('/test', ['controller' => 'app', 'action' => 'test']);

?>