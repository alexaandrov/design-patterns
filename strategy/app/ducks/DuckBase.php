<?php
namespace app\ducks;

use app\fly\SimpleFly;
use app\quack\SimpleQuack;

/**
 * Basic class duck
 */
abstract class DuckBase
{
    protected $name = 'Duck';

    protected $flyBehavior;

    protected $quackBehavior;

    public function __construct()
    {
        $this->quackBehavior = new SimpleQuack();
        $this->flyBehavior = new SimpleFly();
    }

    public function Quack()
    {
        $this->quackBehavior->Quack();
    }

    public function Fly() {
        $this->flyBehavior->Fly();
    }

    public function Swim()
    {
        echo "[Swim]";
    }

    public abstract function Display();
}