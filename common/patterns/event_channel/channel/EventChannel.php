<?php

namespace common\patterns\event_channel\channel;

use common\patterns\event_channel\subscriber\Subscriber;

class EventChannel
{

    /**
     * @param string $topic
     * @param Subscriber $subscriber
     */
    public function subscribe(string $topic, Subscriber $subscriber)
    {

    }

}