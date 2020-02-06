<?php

namespace common\patterns\event_channel\publisher;

use common\patterns\event_channel\channel\iEventChannel;

class Publisher implements iPublisher
{

    /**
     * @var string
     */
    private $topic;

    /**
     * @var iEventChannel
     */
    private $eventChannel;

    /**
     * Publisher constructor.
     * @param string $topic
     * @param iEventChannel $channel
     */
    public function __construct(string $topic, iEventChannel $channel)
    {
        $this->topic = $topic;
        $this->eventChannel = $channel;
    }

    /**
     * @param string $data
     * @return mixed|void
     */
    public function publish(string $data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }

}