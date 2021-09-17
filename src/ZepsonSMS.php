<?php

namespace ZepzonSms\SDK;

/**
 * Class ZepzonSms
 * @package ZepzonSms\SDK
 * @author  Alpha Olomi <hello@alphaolomi.com>
 *
 */
class ZepsonSMS
{
    /**
     * @var string
     * @access public
     * @return string
     */
    public function sendSms(array $data)
    {
        if (isset($data['message']) && isset($data['phone'])) {
            throw new \Exception('Missing parameter: message or phone');
        }
        echo "Sending SMS to {$data['to']}...";
    }
}
