<?php

namespace common\patterns\delegation\messengers;

abstract class aMessenger implements iMessenger
{
    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $message;


    /**
     * @param string $value
     * @return iMessenger
     */
    public function setSender(string $value): iMessenger
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return iMessenger
     */
    public function setRecipient(string $value): iMessenger
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return iMessenger
     */
    public function setMessage(string $value): iMessenger
    {
        $this->message = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return false;
    }
}