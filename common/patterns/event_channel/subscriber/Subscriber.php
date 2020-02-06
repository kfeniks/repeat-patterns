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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $data
     * @return mixed|void
     */
    public function notify(string $data)
    {
        $msg = "{$this->getName()} оповещен данными [{$data}]";
        print_r($msg);
    }

}