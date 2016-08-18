<?php
namespace app\quack;

class SimpleQuack implements IQuack
{
    public function Quack()
    {
        echo "[Quack]";
    }
}