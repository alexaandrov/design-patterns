<?php
require_once __DIR__ . '/autoload.php';

use app\news\NewsAggregator;
use app\widgets\LentaWidget;
use app\widgets\TvWidget;
use app\widgets\TwitterWidget;


$newsAggregator = new NewsAggregator();
$twitterWidget = new TwitterWidget($newsAggregator);
$lentaWidget = new LentaWidget($newsAggregator);
$tvWidget = new TvWidget($newsAggregator);

$newsAggregator->newNewsAvailable();

$twitterWidget->removeFromSubject();

$newsAggregator->newNewsAvailable();