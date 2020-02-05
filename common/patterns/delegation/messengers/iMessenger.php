<?php

namespace common\patterns\delegation\messengers;

interface iMessenger
{

    /**
     * @param string $value
     * @return iMessenger
     */
    public function setSender(string $value): iMessenger;

    /**
     * @param string $value
     * @return iMessenger
     */
    public function setRecipient(string $value): iMessenger;

    /**
     * @param string $value
     * @return iMessenger
     */
    public function setMessage(string $value): iMessenger;

}