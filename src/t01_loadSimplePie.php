<?php
require 'vendor/autoload.php';

use SimplePie\SimplePie;

$url = 'https://www.reddit.com/r/worldnews/top.rss?t=day';

$feed = new SimplePie();
$feed->set_feed_url($url);
$feed->init();