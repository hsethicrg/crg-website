<?php

include("../include/functions.php");

require '../PHPMailer/PHPMailerAutoload.php';

$email = $_POST['email'];
$url = $_POST['url'];

$return = insert_subscribe_data($email);

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Kolkata');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
//$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "info@crgroup.co.in";
$mail->Password = "CRG!#123";

$mail->ClearAllRecipients();
$mail->setFrom('info@crgroup.co.in','CRG Solutions Pvt. Ltd.');

$mail->Subject = 'Thank you for subscribing';

$msg1 = '';
$msg1 = file_get_contents('../templates/suscribe_response.html');

$mail->addAddress($email, $name);

$mail->msgHTML($msg1);

$mail->send();

    
$mail->ClearAllRecipients();
$mail->Subject = 'New Subscription - CRG India Website';

$msg = file_get_contents('../templates/subscribe_info.html');
$msg = str_replace('{EMAIL}', $email, $msg);

$mail->addAddress('hsethi@crgroup.co.in','Himanshu Sethi');
$mail->addAddress('avaidya@crgroup.co.in','Atul Vaidya');

//$mail->addAddress('rsethi@crgroup.co.in','Richa Sethi');
$mail->addAddress('puneet.dwivedi@crgroup.co.in','Puneet Dwivedi');

$mail->msgHTML($msg);

$mail->send();


header("location:http://www.crgroup.co.in/".$url);

?>