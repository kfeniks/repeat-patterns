<?php

namespace common\patterns\event_channel;

use common\patterns\event_channel\channel\EventChannel;
use common\patterns\event_channel\publisher\Publisher;
use common\patterns\event_channel\subscriber\Subscriber;

class EventChannelJob
{

    public function run()
    {

        $newsChannel = new EventChannel();

        $group = new Publisher('group-news', $newsChannel);
        $news = new Publisher('news', $newsChannel);
        $dailyNews = new Publisher('daily-news', $newsChannel);

        $user1 = new Subscriber('Alex Coco');
        $user2 = new Subscriber('Alexander Soso');
        $user3 = new Subscriber('Yoda');
        $user4 = new Subscriber('Master');

        $newsChannel->subscribe('group-news', $user1);

        $newsChannel->subscribe('news', $user2);
        $newsChannel->subscribe('group-news', $user2);

        $newsChannel->subscribe('daily-news', $user3);
        $newsChannel->subscribe('daily-news', $user4);

        $group->publish('New group-news post');
        $news->publish('New news post');
        $dailyNews->publish('New daily-news post');

    }

}