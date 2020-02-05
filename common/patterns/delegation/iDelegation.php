<?php

namespace common\patterns\delegation;

use common\patterns\delegation\messengers\iMessenger;

interface iDelegation
{

    /**
     * @param string $value
     * @return mixed
     */
    public function setSender(string $value): iMessenger;

    /**
     * @param string $value
     * @return mixed
     */
    public function setRecipient(string $value): iMessenger;

    /**
     * @param string $value
     * @return mixed
     */
    public function setMessage(string $value): iMessenger;

}