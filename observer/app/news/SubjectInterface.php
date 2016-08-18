<?php
namespace app\news;

use app\widgets\ObserverInterface;

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $observer);

    public function removeObserver(ObserverInterface $observer);

    public function notifyObservers();
}