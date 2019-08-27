<?php

namespace App\SMS;

use App\Services\CommonService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use SoapClient;
use SoapVar;

class SimpleSMSSender
{
    public $template;
    public $params;

    /**
     * Create a new message instance.
     *
     * @param $template
     * @param $params
     */
    public function __construct($template, $params)
    {
        $this->template = $template;
        $this->params = $params;
    }

    public function send($phone)
    {
        if (!config('constants.SMS.ENABLE')) {
            Log::info('SMS is disable!');
            try {
                $content = View::make($this->template, ['params' => $this->params])->render();
                $phone = CommonService::internationalPhoneNumber($phone);
                Log::info('SMS to: ' . $phone . ' with content: ' . $content);
            } catch (\Exception $e) {
                Log::error($e->getMessage());
            }
            return;
        }

        try {
            $location = config('constants.SMS.SOAP.URL');
            $action = config('constants.SMS.SOAP.ACTION');
            $user = config('constants.SMS.SOAP.USER');
            $password = config('constants.SMS.SOAP.PASSWORD');
            $cpCode = config('constants.SMS.SOAP.CPCODE');
            $serviceId = config('constants.SMS.SOAP.SERVICE_ID');
            $commandCode = config('constants.SMS.SOAP.COMMAND_CODE');
            $content = View::make($this->template, ['params' => $this->params])->render();
            $phone = CommonService::internationalPhoneNumber($phone);

            $params = array(
                new SoapVar($user, XSD_STRING, null, null, 'User'),
                new SoapVar($password, XSD_STRING, null, null, 'Password'),
                new SoapVar($cpCode, XSD_STRING, null, null, 'CPCode'),
                new SoapVar(CommonService::genBookingNumber(), XSD_STRING, null, null, 'RequestID'), // auto generate
                new SoapVar($phone, XSD_STRING, null, null, 'UserID'), // userID and receiverID must be the same
                new SoapVar($serviceId, XSD_STRING, null, null, 'ServiceID'),
                new SoapVar($phone, XSD_STRING, null, null, 'ReceiverID'),
                new SoapVar($content, XSD_STRING, null, null, 'Content'),
                new SoapVar("0", XSD_STRING, null, null, 'ContentType'),
                new SoapVar($commandCode, XSD_STRING, null, null, 'CommandCode'));
            $wrapper = new SoapVar($params, SOAP_ENC_OBJECT);
            $client = new SoapClient($location, array("trace" => 1, "exception" => 0));
            $client->__soapCall($action, array($wrapper));

        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}