<?php

namespace common\patterns\event_channel\channel;

use common\patterns\event_channel\subscriber\iSubscriber;

interface iEventChannel
{
    /**
     * Издатель уведомляет канал о том, что надо
     * всех кто подписался на тему $topic данными $data
     * @param string $topic
     * @param mixed $data
     * @return mixed
     */
    public function publish(string $topic, $data);

    /**
     * Подписчик $subscriber подписывается на событие(данные, инфа) $topic
     * @param string $topic
     * @param iSubscriber $subscriber
     * @return mixed
     */
    public function subscribe(string $topic, iSubscriber $subscriber);

}