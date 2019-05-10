<?php
include "Messages/SMSApi.php";
use Messages\SMSApi;
/**
 * testSMS.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 2019-05-10
 * Time: 13:37
 * Email: bassiroungom@esp.sn
 */


var_dump(sendSMS(774686888, "ceci est un message de test"));



function sendSMS($numDst, $message){
    //$config = [];
    //$sms = new SMSApi($config);
    $sms = new SMSApi();
    $senderAddress = "tel:+221770000000";
    $sms->sendSMS(
        $senderAddress,
        "tel:+221".$numDst,
        $message,
        "TESTSMS"
    );
    return $sms->getSMSBalance();
}
