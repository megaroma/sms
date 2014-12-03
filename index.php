<?php
/*
require 'tropo.class.php';

$tropo = new Tropo();

$tropo->call("+14155550100", array('network'=>'SMS'));
$tropo->say("Tag, you're it!");

$tropo->RenderJson();
*/






//------------------


include('GoogleVoice.php');

//$gv = new GoogleVoice("darkromanovich@gmail.com", "sz840mega911R");
$gv = new GoogleVoice("vzpartnersSMSagent@gmail.com", "smsagent");


//$gv->sendSMS("16462264945", 'Sending a message!');


//$sms = $gv->getUnreadSMS();
$sms = $gv->getReadSMS();
//print_r($sms);
//exit;

$msgIDs = array();
foreach($sms as $s) {
echo 'Message from: '.$s->phoneNumber.' on '.$s->displayStartDateTime.': '.$s->messageText."<br><br>\n";
if(!in_array($s->id, $msgIDs)) {
// Mark the message as read in your Google Voice Inbox.
$gv->markMessageRead($s->id);
$msgIDs[] = $s->id;
}



}


?>