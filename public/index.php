<?php
declare(strict_types = 1);

namespace cityseven\dice;

use Attogram\Router\Router;

require_once('../vendor/autoload.php');

$router = new Router();

$router->allow('/', function (Router $router) {
    print '
<p>Roll The Dice:<p>
<p>
<a href="' . $router->getUriBase() . '/2"><img src="img/d2.svg" alt="d2"></a>
<a href="' . $router->getUriBase() . '/4"><img src="img/d4.svg" alt="d4"></a>
<a href="' . $router->getUriBase() . '/6"><img src="img/d6.svg" alt="d6"></a>
<a href="' . $router->getUriBase() . '/8"><img src="img/d8.svg" alt="d8"></a>
<a href="' . $router->getUriBase() . '/10"><img src="img/d10.svg" alt="d10"></a>
<a href="' . $router->getUriBase() . '/12"><img src="img/d12.svg" alt="d12"></a>
<a href="' . $router->getUriBase() . '/20"><img src="img/d20.svg" alt="d20"></a>
<a href="' . $router->getUriBase() . '/100"><img src="img/d100.svg" alt="d100"></a>
</p>';
});
$router->allow('/?', function (Router $router) {
    $sides = $router->getVar(0);

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
