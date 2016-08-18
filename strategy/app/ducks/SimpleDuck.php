<?php
namespace app\ducks;

/**
 * Simple duck class.
 */
class SimpleDuck extends DuckBase
{
    protected $name = 'Simple duck';

    public function Display()
    {
        echo "\n\n$this->name\n";
    }
}