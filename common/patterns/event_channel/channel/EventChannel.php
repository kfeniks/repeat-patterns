<?php

namespace common\patterns\event_channel\channel;

use common\patterns\event_channel\subscriber\iSubscriber;

class EventChannel implements iEventChannel
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

    /**
     * @param string $topic
     * @param string $data
     */
    public function publish(string $topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /**
             * @var iSubscriber $subscriber
             */
            $subscriber->notify($data);
        }
    }

}