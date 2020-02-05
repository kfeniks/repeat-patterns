<?php

namespace common\patterns\delegation;

use common\patterns\delegation\messengers\EmailMessenger;
use common\patterns\delegation\messengers\iMessenger;
use common\patterns\delegation\messengers\SmsMessenger;

class AppMessenger implements iMessenger
{

    /**
     * @var iMessenger
     */
    protected $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    /**
     * @return self
     */
    public function toEmail(): self
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    /**
     * @return self
     */
    public function toSms(): self
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSender(string $value): iMessenger
    {
        $this->messenger->setSender($value);

        return $this->messenger;
    }

    /**
     * @inheritDoc
     */
    public function setRecipient(string $value): iMessenger
    {
        $this->messenger->setRecipient($value);

        return $this->messenger;
    }

    /**
     * @inheritDoc
     */
    public function setMessage(string $value): iMessenger
    {
        $this->messenger->setMessage($value);

        return $this->messenger;
    }

    /**
     * @inheritDoc
     */
    public function send(): bool
    {
        return $this->messenger->send();
    }
}