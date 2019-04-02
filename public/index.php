<?php
declare(strict_types = 1);

namespace cityseven\dice;

use Attogram\Router\Router;

require_once('../vendor/autoload.php');

$router = new Router();

$router->allow('/', function (Router $router) {
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
});
$router->allow('/?', function (Router $router) {
    $sides = $router->getVars()[0];
	
    if (preg_match('/^[0-9]+$/', $sides) !== 1) {
    	die('Dice Not Found');
    }
	
    $roll = random_int(1, (int) $sides);
    print 'd' . $sides . ' roll is: ' . $roll;
});

$match = $router->match();
if (!is_callable($match) ) {
    die('Page Not Found');
}

?><html><head><title>Roll the dice</title></head><body><?php
	
$match($router);

?></body></html>
