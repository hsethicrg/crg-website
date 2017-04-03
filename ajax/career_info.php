<?php

include("../include/functions.php");

require '../PHPMailer/PHPMailerAutoload.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
//$cv         = $_FILES['cv'];
$mobile     = $_POST['mobile'];
$type       = $_POST['type'];

$filename = $_FILES["cv"]["name"];
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["cv"]["name"]);
$uploadOk = 0;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//$check = getimagesize($_FILES["cv"]["tmp_name"]);
if(preg_match("/\.(docx|doc|pdf)$/", $filename)){
    
    move_uploaded_file( $_FILES['cv']['tmp_name'], $target_dir.$filename);
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;

    //print_r($_POST);

    $return = insert_career_data($name, $email, $filename, $mobile, $type);

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
    
    $mail->Subject = 'Thank you for sharing your details';

    $msg1 = '';
    $msg1 = file_get_contents('../templates/career_response.html');
    $msg1 = str_replace('{NAME}', $name, $msg1);

    $mail->addAddress($email, $name);

    $mail->msgHTML($msg1);

    $mail->send();

    
    $mail->ClearAllRecipients();
    $mail->Subject = 'New Candidate - CRG India Website';

    $msg = file_get_contents('../templates/careers_mail.html');
    $msg = str_replace('{NAME}', $name, $msg);
    $msg = str_replace('{EMAIL}', $email, $msg);
    $msg = str_replace('{MOBILE}', $mobile, $msg);

    $mail->AddAttachment($target_dir.$filename);
    
    if($type == 'Services'){
        $mail->addAddress('hsethi@crgroup.co.in','Himanshu Sethi');
        
    }else if($type == 'Sales'){
        $mail->addAddress('avaidya@crgroup.co.in','Atul Vaidya');
        
    }else{
        $mail->addAddress('hsethi@crgroup.co.in','Himanshu Sethi');
        $mail->addAddress('avaidya@crgroup.co.in','Atul Vaidya');
        
    }
    $mail->addAddress('rsethi@crgroup.co.in','Richa Sethi');
    //$mail->addAddress('puneet.dwivedi@crgroup.co.in','Puneet Dwivedi');

    $mail->msgHTML($msg);

    $mail->send();
    
    echo "<script>alert('Thanks for providing your details.<br>We'll get back to you shortly!');</script>";

} else {
    echo "<script>alert('Only DOCX, DOC and PDF formats are allowed.');</script>";
    $uploadOk = 0;
}
//echo $uploadOk; exit;
header("location:http://www.crgroup.co.in/beta/careers.php");
//echo $return;
?>