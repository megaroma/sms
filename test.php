<?php
//0364c0fac7d1334c91ed3928ed81d26c4964815a9eb5c86ad800dce418618eeb146b387154b0dd8f22df61e0


require 'tropo.class.php';

$session = new Session();	 
$initialText = $session->getInitialText();
//if($initialText) {
	$file = 'log.txt';
$current = file_get_contents($file);
$current .= "it was run:]\n";
$current .= $initialText."\n";
file_put_contents($file, $current);

//}



$tropo = new Tropo();

$tropo->call("+16462264945", array('network'=>'SMS'));
$tropo->say("Tag, you're it!");

$tropo->RenderJson();


?>