<?php
namespace app\ducks;

use app\fly\NoFly;
use app\quack\SimpleQuack;

class RubberDuck extends DuckBase
{
    protected $name = 'Rubber duck';

    public function __construct()
    {
        $this->quackBehavior = new SimpleQuack();
        $this->flyBehavior = new NoFly();
    }

    public function Display()
    {
        echo "\n\n$this->name\n";
    }
}