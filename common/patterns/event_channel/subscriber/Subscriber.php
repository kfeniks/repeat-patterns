<?php

namespace common\patterns\event_channel\subscriber;

class Subscriber implements iSubscriber
{

    /**
     * @var string
     */
    private $name;

    /**
     * Subscriber constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

}