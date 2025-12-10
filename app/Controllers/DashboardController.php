<?php

namespace App\Controllers;

use App\Models\Employee;
use Symfony\Component\Routing\RouteCollection;

class DashboardController {
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        $routeToEmployee = str_replace('{id}', 1, $routes->get('employee')->getPath());

        require_once APP_ROOT . '/view/Dashboard-view.php';
    }
}
