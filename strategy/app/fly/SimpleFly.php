<?php
namespace app\fly;

class SimpleFly implements FlyInterface
{
    public function fly()
    {
        echo "[Fly]";
    }
}