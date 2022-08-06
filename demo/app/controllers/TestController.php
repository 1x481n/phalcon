<?php
declare(strict_types=1);

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        echo php_ini_loaded_file();
    }

}

