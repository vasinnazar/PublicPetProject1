<?php
declare(strict_types=1);
require_once('dependencies.php');

$router = include_once('app/Router.php');
$routes = include_once('app/routes.php');
$router = new Router();
$router->run($_SERVER['REQUEST_URI'], $routes);

