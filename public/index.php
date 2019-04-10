<?php
declare(strict_types = 1);

namespace cityseven\dice;

use Attogram\Router\Router;

require_once('../vendor/autoload.php');

$diceSet = [2, 4, 6, 8, 10, 12, 20, 100];

$router = new Router();

$router->allow('/', function (Router $router) {
    global $diceSet;

    echo '<h1>Roll The Dice</h1><div style="display:flex;flex-flow:row wrap;">';
    foreach ($diceSet as $dice) {
        echo '<a href="' . $router->getHome() . $dice . '">
<div style="border:1px solid #d0d0d0;text-align:center;">
    <div>d' . $dice . '</div>
    <div><img src="img/d' . $dice . '.php" alt="d' . $dice . '"></div>
</div>
</a>';
    }
    echo '</div>';
});


$router->allow('/?', function (Router $router) {
    global $diceSet;

    $sides = $router->getVar(0);

    if (preg_match('/^[0-9]+$/', $sides) !== 1) {
        die('Dice Not Found');
    }

    print '<p><a href="' . $router->getHome() . '">Roll The Dice</a></p>';

    print '<p>Rolling d' . $sides . '</p>';
    if (in_array($sides, $diceSet)) {
        print '<img src="img/d' . $sides . '.php">';
    } else {
        echo '<p>Roll d' . $sides . ' = <b>' . random_int(1, (int) $sides) . '</b></p>';
    }
});

$router->allow('/?/d.svg', function (Router $router) {
    global $diceSet;

    $sides = $router->getVar(0);
    if (!in_array($sides, $diceSet)) {
        die('Dice Not Found');
    }
});

$match = $router->match();
if (!is_callable($match) ) {
    die('Page Not Found');
}

?><html><head><title>Roll the dice</title></head><body><?php

$match($router);

?></body></html>
