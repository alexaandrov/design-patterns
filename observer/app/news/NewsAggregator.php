<?php
namespace app\news;

use app\widgets\ObserverInterface;

class NewsAggregator implements SubjectInterface
{
    private $observers = [];

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[$observer->getName()] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        unset($this->observers[$observer->getName()]);
    }

    public function newNewsAvailable()
    {
        $this->notifyObservers();
    }

    public function notifyObservers()
    {
        $twitter = $this->getNews('twitter');
        $lenta = $this->getNews('lenta');
        $tv = $this->getNews('tv');

        foreach ($this->observers as $observer) {
            $observer->update(
                $twitter,
                $lenta,
                $tv
            );
        }
    }

    public function getNews(string $widgetName)
    {
        $news = [
            "News from $widgetName number 1\n",
            "News from $widgetName number 2\n",
            "News from $widgetName number 4\n",
            "News from $widgetName number 5\n",
            "News from $widgetName number 6\n"
        ];

        return $news[rand(0, count($news) - 1)];
    }
}