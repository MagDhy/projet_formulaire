<?php
//check if form was sent
if($_POST){

	$to = 'some@email.com';
	$subject = 'Testing HoneyPot';
	$header = "From: $name <$name>";

	$name = $_POST['honeyname'];
	$email = $_POST['honeyemail'];
	$message = $_POST['honeymessage'];

	//honey pot field
	$honeypot = $_POST['honeyfirstname'];

	//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}else{
		mail( $to, $subject, $message, $header );
	}
}

?>