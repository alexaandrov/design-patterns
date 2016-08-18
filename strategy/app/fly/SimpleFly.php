<?php
namespace app\fly;

class SimpleFly implements IFly
{
    public function fly()
    {
        echo "[Fly]";
    }
}