<?php
namespace app\widgets;

use app\news\SubjectInterface;

class LentaWidget implements ObserverInterface, WidgetInterface
{
    const WIDGET_NAME = 'Lenta';

    private $lenta;
    private $subject;

    public function __construct(SubjectInterface $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function getName()
    {
        return self::WIDGET_NAME;
    }

    public function update(
        string $twitter,
        string $lenta,
        string $tv
    )
    {
        $this->lenta = $lenta;
        $this->display();
    }

    public function display()
    {
        echo $this->lenta;
    }

    public function removeFromSubject()
    {
        $this->subject->removeObserver($this);
    }
}