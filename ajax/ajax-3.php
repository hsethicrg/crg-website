<?php
session_start();
include("../include/functions.php");

require '../PHPMailer/PHPMailerAutoload.php';

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Kolkata');
if(!empty($_POST['position'])){
	
	if($_POST['position'] == 'Sales Account Manager'){
		$heading  = 'Sales Account Manager';
	}
	else{
		$heading  = $_POST['position'];
		}
	
}
else{
	
	$heading  = '';
	
	}

$name       = $_POST['name'];
$email      = !empty($_POST['email']) ? $_POST['email'] : '';
$mobile     = $_POST['mobile'];
$comment    = $_POST['comment'];

//$return = insert_contact_us_data($name, $email,"", $mobile,$comment, "");

if(!empty($_FILES['resume']['name'])) {
    //if no errors...
    if(!$_FILES['resume']['error']) {

        $tmp_name = $_FILES['resume']['name'];
        $extension = end(explode(".", $tmp_name));
        $file_name = '../uploads/'.$name.'-'.time().'.'.$extension;
        if($_FILES['resume']['size'] > (1024000*4)) { //can't be larger than 4 MB
            echo 'Oops!  Your file\'s size is to large.';exit;
        } else {
            //move it to where we want it to be
            move_uploaded_file($_FILES['resume']['tmp_name'], $file_name);
        }

    } else {
        //set that to be the returned message
       echo 'Ooops!  Your upload triggered the following error:  '.$_FILES['resume']['error']; exit;
    }
} else {
    echo "Please upload resume and submit";exit;
}

$mail = new PHPMailer();
//$mail->isSMTP();
//$mail->SMTPDebug = 0;
//$mail->Debugoutput = 'html';
//$mail->Host = 'ssl://smtp.gmail.com';
//$mail->Port = 465;
//$mail->SMTPSecure = 'ssl';
//$mail->SMTPAuth = true;
//$mail->Username = "info@crgroup.co.in";
//$mail->Password = "CRG!#123";



$mail->setFrom('info@crgroup.co.in','crgroup.co.in');
$mail->Subject = 'New Lead from crgroup.co.in website: Career';

$msg = file_get_contents('../templates/careers_mail.html');
$msg = str_replace('{POSITION}', $heading, $msg);
$msg = str_replace('{NAME}', $name, $msg);
$msg = str_replace('{EMAIL}', $email, $msg);
$msg = str_replace('{MOBILE}', $mobile, $msg);
$msg = str_replace('{COMMENT}', $comment, $msg);

$mail->addAddress('hsethi@crgroup.co.in');
$mail->AddAttachment($file_name);
$mail->msgHTML($msg);



if($mail->send()){
		$_SESSION["successmailCarrier"] = $email;
		setcookie("myCookie", $email);
}
	

//echo "Here";
header("location:http://www.crgroup.co.in/careers.php");
//echo $return;
?>