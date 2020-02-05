<?php

namespace common\patterns\event_channel\publisher;

use common\patterns\event_channel\channel\EventChannel;

class Publisher
{

    /**
     * Publisher constructor.
     * @param string $topic
     * @param EventChannel $channel
     */
    public function __construct(string $topic, EventChannel $channel)
    {
    }

    public function publish(string $message)
    {

    }

}