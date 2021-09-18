<?php

namespace ZepzonSms\SDK\Services;

/**
 * SMS Service
 */
trait SMS
{

    /**
     * Send SMS
     * @param array $data
     * @return mixed
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ZepzonSms\Exception\InvalidRequestException
     * @throws \ZepzonSms\Exception\InvalidResponseException
     * @throws \ZepzonSms\Exception\ServiceUnavailableException
     * @throws \ZepzonSms\Exception\UnauthorizedException
     * @throws \ZepzonSms\Exception\UnknownException
     * @throws \ZepzonSms\Exception\InvalidCredentialsException
     * @throws \ZepzonSms\Exception\InvalidSenderException
     * @throws \ZepzonSms\Exception\InvalidRecipientException
     * @throws \ZepzonSms\Exception\InvalidMessageException
     * @throws \ZepzonSms\Exception\InvalidPhoneNumberException
     * @throws \ZepzonSms\Exception\InvalidCountryCodeException
     * @throws \ZepzonSms\Exception\InvalidNumberOfDigitsException
     * @throws \ZepzonSms\Exception\InvalidMessageLengthException
     * @throws \ZepzonSms\Exception\InvalidMessageTypeException
     * @throws \ZepzonSms\Exception\InvalidMessageEncodingException
     * @throws \ZepzonSms\Exception\InvalidMessageValidityPeriodException
     * @throws \ZepzonSms\Exception\InvalidMessagePriorityException
     * @throws \ZepzonSms\Exception\InvalidMessageClassException
     * @throws \ZepzonSms\Exception\InvalidMessageSenderNameException
     * @throws \ZepzonSms\Exception\InvalidMessageSenderAddressException
     * @throws \ZepzonSms\Exception\InvalidMessageSenderCityException
     * @throws \ZepzonSms\Exception\InvalidMessageSenderStateException
     * @throws \ZepzonSms\Exception\InvalidMessageSenderPostalCodeException
     *
     * @link https://www.zepzon.com/docs/sms-api/send-sms-api-endpoint/
     */
    public function sendSMS(array $data)
    {
        $data['sender'] = $this->getSender();
        $data['recipient'] = $this->getRecipient();
        $data['message'] = $this->getMessage();
        $data['countryCode'] = $this->getCountryCode();
        $data['numberOfDigits'] = $this->getNumberOfDigits();

        $response = $this->request('POST', 'sms', $data);

        return $response;
    }
}
