<?php
namespace app\quack;

class SimpleQuack implements IQuack
{
    public function quack()
    {
        echo "[Quack]";
    }
}