<?php

use Kavenegar\Exceptions\ApiException;
use Kavenegar\KavenegarApi;
use Tygh\Languages\Languages;
use Tygh\Registry;

if (!defined('AREA')) {
    die('Access denied');
}

function fn_am_kavenegar_sms_send($phone_numbers, $message = '') {

    if(!is_array($phone_numbers)) {
        $phone_numbers = [$phone_numbers];
    }

    $apiKey = Registry::get('addons.zm_sms.api_key');
    $sender = Registry::get('addons.zm_sms.sender');

    try {
        $api = new KavenegarApi($apiKey);
        $receptor = $phone_numbers;
        return $api->Send($sender,$receptor,$message);
        /*if($result){
            foreach($result as $r){
                echo "messageid = $r->messageid";
                echo "message = $r->message";
                echo "status = $r->status";
                echo "statustext = $r->statustext";
                echo "sender = $r->sender";
                echo "receptor = $r->receptor";
                echo "date = $r->date";
                echo "cost = $r->cost";
            }
        }*/

    } catch(ApiException $e){
        // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
        return [
            'status' => false,
            'message' => $e->errorMessage()
        ];

    } catch(HttpException $e){
        // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
        return [
            'status' => false,
            'message' => $e->errorMessage()
        ];
    }
}
