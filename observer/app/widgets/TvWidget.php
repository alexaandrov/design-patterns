<?php
namespace app\widgets;

use app\news\SubjectInterface;

class TvWidget implements ObserverInterface, WidgetInterface
{
    const WIDGET_NAME = 'Tv';

    private $tv;
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
        $this->tv = $tv;
        $this->display();
    }

    public function display()
    {
        echo $this->tv;
    }

    public function removeFromSubject()
    {
        $this->subject->removeObserver($this);
    }
}