<?php

include("../include/functions.php");

require '../PHPMailer/PHPMailerAutoload.php';

   $name = $_POST['name'];
   $company = $_POST['company'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];	
   $license = $_POST['license'];	
   $license2 = implode(',',$license);


$return = insert_contact_us_data($name, $email, $company, $mobile, $license2);

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
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian landing Page, Free Support';

$msg = file_get_contents('../templates/contact_us_info_tablu.html');
$msg = str_replace('{NAME}', $name, $msg);
$msg = str_replace('{EMAIL}', $email, $msg);
$msg = str_replace('{COMPANY}', $company, $msg);
$msg = str_replace('{MOBILE}', $mobile, $msg);
$msg = str_replace('{LICENSE}', $license2, $msg);

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
//header("location:http://www.crgroup.co.in/index.php?m='send'");
//echo $return;
?>