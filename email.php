<?php

header("Content-Type: application/json; charset=UTF-8");
$post_data = json_decode(file_get_contents('php://input'));

$subject = 'You Got Message'; // Subject of your email
$to = 'info@ffouganda.org';  //Recipient's E-mail
$emailTo = $post_data->email;
$response = [];

$name = $post_data->name;
$email = $post_data->email;
$phone = $post_data->phone;
$msg = $post_data->message;

$email_from = $name.'<'.$email.'>';

$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: ".$name.'<'.$email.'>'."\r\n"; // Sender's E-mail
$headers .= "Return-Path:"."From:" . $email;

$message = 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Message : ' . $msg;

// mail($to,$subject,$txt,$headers);

if( mail($to, $subject, $message, $headers) )
{
	// Transfer the value 'sent' to ajax function for showing success message.
	$response['message'] = "sent";
	echo json_encode($response);
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	$response['message'] = "failed";
	echo json_encode($response);
}









?>