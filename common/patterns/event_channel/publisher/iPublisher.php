<?php

namespace common\patterns\event_channel\publisher;

interface iPublisher
{

    /**
     * @param string $data
     * @return mixed
     */
    public function publish(string $data);

}