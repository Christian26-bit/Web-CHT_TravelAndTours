<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('employee', new Route(constant('URL_SUBFOLDER') . '/employee/{id}', array('controller' => 'LoginController', 'method'=>'showAction'), array('id' => '[0-9]+')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'DashboardController', 'method'=>'indexAction'), array()));