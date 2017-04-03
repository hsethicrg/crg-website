<?php
//echo "abc";exit;
include("../include/functions.php");

require '../PHPMailer/PHPMailerAutoload.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
$mobile     = $_POST['mobile'];
$type       = ucwords($_POST['type']);
$comp       = $_POST['company'];
$comment    =  !empty($_POST['message']) ? $_POST['message'] : 'New lead from crgroup.co.in - '.$_POST['subjectvalue'] ;
$subjectvalue = $_POST['subjectvalue'];

//$return = insert_contact_us_data($name, $email,"", $mobile,"", $type);

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Kolkata');

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

$mail->ClearAllRecipients();

$mail->setFrom('info@crgroup.co.in','crgroup.co.in');

if($subjectvalue == "Tableau Implementation Inquiry") {
$mail->Subject = 'New Lead from crgroup.co.in website : Tableau Implementation Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');



}

else if($subjectvalue=="Tableau General Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Tableau General Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}

else if($subjectvalue=="Atlassian Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');



}

else if($subjectvalue=="Datawatch Business Leaders Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Business Leaders Inquiry';
$mail->addAddress('avaidhya@crgroup.inn');
$mail->AddCC('sghosh@crgroup.in');


}


else if($subjectvalue=="Datawatch General Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch General Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}

else if($subjectvalue=="Engage Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Engage Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}

else if($subjectvalue=="request a set"){
$mail->Subject = 'New Lead from crgroup.co.in website : Request A Set';
$mail->addAddress('debashis.midya87@gmail.com');
$mail->AddCC('sghosh@crgroup.in');


}


else if($subjectvalue=="Cousulting Session"){
$mail->Subject = 'New Lead from crgroup.co.in website : Consulting Session';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}
else if($subjectvalue=="Home Page, Visual Studio Slider"){
$mail->Subject = 'New Lead from crgroup.co.in website : Home Page, Visual Studio Slider';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}

else if($subjectvalue=="Datawatch"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}

else if($subjectvalue=="Home Page, Datawatch Slider"){
$mail->Subject = 'New Lead from crgroup.co.in website : Home Page, Datawatch Slider';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}
else if($subjectvalue=="Home Page, Atlassian Slider"){
$mail->Subject = 'New Lead from crgroup.co.in website : Home Page, Atlassian Slider';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');


}
else if($subjectvalue=="Home Page, Contact us area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Home Page, Contact us area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Tableau Page, Contact us area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Tableau Page, Contact us area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Tableau Page,Implementation Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Tableau Page,Implementation Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Tableau Page,Tech Support Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Tableau Page,Tech Support Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Tableau Page, Book Assessment"){
$mail->Subject = 'New Lead from crgroup.co.in website : Tableau Page, Book Assessment';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian Page, Jira Services Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Page, Jira Services Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian Page, Jira Health Check Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Page, Jira Health Check Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian Page, Confluence Service Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Page, Confluence Service Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian Page, Atlassian Training Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Page, Atlassian Training Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian Page, Contact us area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Page, Contact us area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian Page, Download Free Trial"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian Page, Download Free Trial';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Datawatch Page, Try Datawatch Free Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Page, Try Datawatch Free Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Datawatch Page, Business Leaders Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Page, Business Leaders Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Datawatch Page, Analysts Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Page, Analysts Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Datawatch Page, Bi It Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Page, Bi It Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Datawatch Page, Book Assigment Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Page, Book Assigment Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Datawatch Page, Contact us area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Datawatch Page, Contact us area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian landing Page, contact us"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian landing Page, contact us';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Atlassian landing Page, Jira Services Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian landing Page, Jira Services Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Atlassian landing Page, Jira Health Check Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian landing Page, Jira Health Check Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}

else if($subjectvalue=="Atlassian landing Page, Confluence Service Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian landing Page, Confluence Service Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Atlassian landing Page, Atlassian Training Inquiry"){
$mail->Subject = 'New Lead from crgroup.co.in website : Atlassian landing Page, Atlassian Training Inquiry';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Engage Page, Contact us area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Engage Page, Contact us area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Bi Institute Page, Request A Set area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Bi Institute Page, Request A Set area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Bi Institute Page, Contact us area"){
$mail->Subject = 'New Lead from crgroup.co.in website : Bi Institute Page, Contact us area';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Bi Institute Page, About Tableau Training"){
$mail->Subject = 'New Lead from crgroup.co.in website : Bi Institute Page, About Tableau Training';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else if($subjectvalue=="Bi Institute Page,best training program"){
$mail->Subject = 'New Lead from crgroup.co.in website : Bi Institute Page,best training program';
$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');
}
else {
$mail->Subject = 'New lead from crgroup.co.in';
}





$msg = file_get_contents('../templates/free_trial_info.html');
$msg = str_replace('{NAME}', $name, $msg);
$msg = str_replace('{EMAIL}', $email, $msg);
$msg = str_replace('{MOBILE}', $mobile, $msg);
$msg = str_replace('{TYPE}', $type, $msg);
$msg = str_replace('{COMPANY}', $comp, $msg);
$msg = str_replace('{MESSAGE}', $comment, $msg);


$mail->msgHTML($msg);

$mail->send();

$mail->ClearAllRecipients();
$mail->Subject = 'Thank you for contacting us';

$msg1 = '';
$msg1 = file_get_contents('../templates/free_trial_response.html');
$msg1 = str_replace('{NAME}', $name, $msg1);

$mail->addAddress($email, $name);
$mail->msgHTML($msg1);
$mail->send();

header("location:http://www.crgroup.co.in/beta/contact.php");
?>

<!--$mail->addAddress('avaidhya@crgroup.in');
$mail->AddCC('sghosh@crgroup.in');-->
