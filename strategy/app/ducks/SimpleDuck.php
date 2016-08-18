<?php
namespace app\ducks;

/**
 * Simple duck class.
 */
class SimpleDuck extends DuckBase
{
    protected $name = 'Simple duck';

    public function display()
    {
        echo "\n\n$this->name\n";
    }
}