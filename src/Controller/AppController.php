<?php
namespace Controller;

class AppController extends \Core\Controller
{
    public function indexAction()
    {
        echo "App [OK]";
        $this->render('index');
    }
    public function testAction()
    {
        $this->render('index');
        echo 'testaction';
    }
}

?>