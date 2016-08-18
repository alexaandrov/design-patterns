<?php
namespace app\ducks;

/**
 * Exotic duck class
 */
class ExoticDuck extends DuckBase
{
    protected $name = 'Exotic duck';

    public function display()
    {
        echo "\n\n$this->name\n";
    }
}