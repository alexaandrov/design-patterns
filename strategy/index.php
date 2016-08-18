<?php

require_once __DIR__ . "/autoload.php";

use app\ducks\ExoticDuck;
use app\ducks\SimpleDuck;
use app\ducks\RubberDuck;
use app\ducks\WoodenDuck;

$ducks[] = new ExoticDuck();
$ducks[] = new SimpleDuck();
$ducks[] = new WoodenDuck();
$ducks[] = new RubberDuck();


foreach ($ducks as $duck) {
    $duck->display();
    $duck->swim();
    $duck->quack();
    $duck->fly();
}

// Variable
//
// - Display
// - Swim
//
// Constant
//
// - Quack
// - Fly