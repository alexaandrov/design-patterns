<?php
namespace app\ducks;

/**
 * Exotic duck class
 */
class ExoticDuck extends DuckBase
{
    protected $name = 'Exotic duck';

    public function Display()
    {
        echo "\n\n$this->name\n";
    }
}