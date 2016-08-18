<?php
namespace app\widgets;

interface ObserverInterface
{
    public function getName();

    public function update(
        string $twitter,
        string $lenta,
        string $tv
    );

    public function removeFromSubject();
}