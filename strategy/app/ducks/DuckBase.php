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

    public function quack()
    {
        $this->quackBehavior->quack();
    }

    public function fly() {
        $this->flyBehavior->fly();
    }

    public function swim()
    {
        echo "[Swim]";
    }

    public abstract function display();
}