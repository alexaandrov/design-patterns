<?php
namespace app\ducks;

use app\fly\NoFly;
use app\quack\NoQuack;

class WoodenDuck extends DuckBase
{
    protected $name = 'Wooden duck';

    public function __construct()
    {
        $this->flyBehavior = new NoFly();
        $this->quackBehavior = new NoQuack();
    }

    public function Display()
    {
        echo "\n\n$this->name\n";
    }
}