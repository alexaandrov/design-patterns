<?php
namespace app\quack;

class SimpleQuack implements QuackInterface
{
    public function quack()
    {
        echo "[Quack]";
    }
}