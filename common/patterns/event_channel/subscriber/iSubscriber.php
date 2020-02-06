<?php

namespace common\patterns\event_channel\subscriber;

interface iSubscriber
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $data
     * @return mixed
     */
    public function notify(string $data);

}