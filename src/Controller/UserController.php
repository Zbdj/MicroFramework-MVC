<?php

namespace Controller;

class UserController extends \Core\Controller
{
    public function indexAction()
    {
      //  echo __CLASS__ . "indexAction" . PHP_EOL;
        echo "bonjour";
    }


    public function removeAction()
    {
        echo __CLASS__ . "REMOVE" . PHP_EOL;
    }
    public function addAction()
    {
        $this->render('index');
        echo 'addAction';
    }
}


?>