<?php
namespace app\widgets;

use app\news\SubjectInterface;

class TwitterWidget implements ObserverInterface, WidgetInterface
{
    const WIDGET_NAME = 'Twitter';

    private $twitter;
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
        $this->twitter = $twitter;
        $this->display();
    }

    public function display()
    {
        echo $this->twitter;
    }

    public function removeFromSubject()
    {
        $this->subject->removeObserver($this);
    }
}