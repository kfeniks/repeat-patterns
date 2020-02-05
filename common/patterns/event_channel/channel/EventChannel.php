<?php

namespace common\patterns\event_channel\channel;

use common\patterns\event_channel\subscriber\iSubscriber;

class EventChannel
{
    /**
     * @var array
     */
    private $topics = [];

    /**
     * @param string $topic
     * @param iSubscriber $subscriber
     */
    public function subscribe(string $topic, iSubscriber $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        $msg = "{$subscriber->getName()} подписан на [{$topic}]";
        print_r($msg);
    }

}