<?php
declare(strict_types = 1);

namespace cityseven\dice;

use Attogram\Router\Router;

require_once('../vendor/autoload.php');

$router = new Router();

$home = function (Router $router) {
    print '<p>Roll The Dice:
	<a href="' . $router->getUriBase() . '/4">d4</a>
	<a href="' . $router->getUriBase() . '/6">d6</a>
	<a href="' . $router->getUriBase() . '/8">d8</a>
	<a href="' . $router->getUriBase() . '/10">d10</a>
	<a href="' . $router->getUriBase() . '/12">d12</a>
	<a href="' . $router->getUriBase() . '/20">d20</a>
	<a href="' . $router->getUriBase() . '/32">d32</a>
	<a href="' . $router->getUriBase() . '/64">d64</a>
	<a href="' . $router->getUriBase() . '/100">d100</a>
    </p>';
};

$roll = function (Router $router) {

    $roll = random_int(1, (int) $router->getVars()[0]);
    print $roll;
};

$router->allow('/', $home);
$router->allow('/?', $roll);

$match = $router->match();
if (!is_callable($match) ) {
    notFound();
}

$match($router);


function notFound()
{
    die('Page Not Found');
}
