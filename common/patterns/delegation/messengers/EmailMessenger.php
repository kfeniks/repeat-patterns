<?php

namespace common\patterns\delegation\messengers;

class EmailMessenger extends aMessenger
{

    /**
     * @return bool
     */
    public function send(): bool
    {
        print_r('Send by: ' . __METHOD__) . PHP_EOL;
        return parent::send();
    }
}