<?php

include("../include/functions.php");

require '../PHPMailer/PHPMailerAutoload.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
$subject    = $_POST['subject'];
$mobile     = $_POST['mobile'];
$comment    = $_POST['comment'];


$return = insert_contact_us_data($name, $email, $subject, $mobile, $comment);

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Kolkata');

$mail = new PHPMailer();
//$mail->isSMTP();
//$mail->SMTPDebug = 2;
//$mail->Debugoutput = 'html';
//$mail->Host = 'ssl://smtp-relay.gmail.com';
//$mail->Port = 25;
//$mail->SMTPSecure = 'ssl';
//$mail->SMTPAuth = true;
//$mail->Username = "info@crgroup.co.in";
//$mail->Password = "CRG!#123";

$mail->ClearAllRecipients();

$mail->setFrom('info@crgroup.co.in','crgroup.co.in');
$mail->Subject = 'New Lead from crgroup.co.in website: Contact us page';

$msg = file_get_contents('../templates/contact_us_info.html');
$msg = str_replace('{NAME}', $name, $msg);
$msg = str_replace('{EMAIL}', $email, $msg);
$msg = str_replace('{SUBJECT}', $subject, $msg);
$msg = str_replace('{MOBILE}', $mobile, $msg);
$msg = str_replace('{COMMENT}', $comment, $msg);

$mail->addAddress('hsethi@crgroup.co.in');

$mail->msgHTML($msg); 

$mail->send();


$mail->ClearAllRecipients();
$mail->Subject = 'Thank you for contacting us';

$msg1 = '';
$msg1 = file_get_contents('../templates/contact_us_response.html');
$msg1 = str_replace('{NAME}', $name, $msg1);

$mail->addAddress($email, $name);

$mail->msgHTML($msg1);

$mail->send();
//echo "Here";
header("location:http://www.crgroup.co.in/beta/contact.php");
//echo $return;
?>