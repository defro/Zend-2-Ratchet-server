<?php

namespace SocketServer\Controller;

use Zend\Console\Request as ConsoleRequest;
use Zend\Mvc\Controller\AbstractActionController;


class SocketCliController extends AbstractActionController
{
    protected $socked;

    public function __construct($socked)
    {
        $this->socked = $socked;
    }


    public function openAction()
    {
        $request = $this->getRequest();

        if (!$request instanceof ConsoleRequest) {
            throw new \RuntimeException('You can only use this action from a console!');
        }

        $this->socked->run();
    }

}
