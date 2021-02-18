<?php
namespace SocketServer\Factory;

use SocketServer\Controller\SocketCliController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SocketCliControllerFactory  implements FactoryInterface{

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $server = $realServiceLocator->get('SocketServer');

        return new SocketCliController($server);
    }
}
