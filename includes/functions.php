<?php  

//include("database.php");

function insert_contact_us_data($name, $email, $subject, $mobile, $comment, $type=""){
    
    $link = mysql_connect('localhost', 'smassqz8_crgv2us', 'crgv2pass');
    if (!$link) {
            die('Could not connect: ' . mysql_error());
    }

    @mysql_select_db('smassqz8_crgv2', $link) or die( "Unable to select database");
    
    $sql = "INSERT into contact_us (name, email, subject, mobile, comment,type, datetime)
           values('".$name."','".$email."','".$subject."','".$mobile."','".$comment."','".$type."',now())";
    
    $result = mysql_query($sql, $link);
    
    if($result){
        return 1;
    }else{
        return 0;
    }
    
}

function insert_career_data($name, $email, $cv, $mobile, $type){
    
    $link = mysql_connect('localhost', 'smassqz8_crgv2us', 'crgv2pass');
    if (!$link) {
            die('Could not connect: ' . mysql_error());
    }

    @mysql_select_db('smassqz8_crgv2', $link) or die( "Unable to select database");
    
    $sql = "INSERT into careers (name, email, cv_name, mobile, type, datetime)
           values('".$name."','".$email."','".$cv."','".$mobile."','".$type."',now())";
    
    $result = mysql_query($sql, $link);
    
    if($result){
        return 1;
    }else{
        return 0;
    }
    
}

function insert_subscribe_data($email){
    
    $link = mysql_connect('localhost', 'smassqz8_crgv2us', 'crgv2pass');
    if (!$link) {
            die('Could not connect: ' . mysql_error());
    }

    @mysql_select_db('smassqz8_crgv2', $link) or die( "Unable to select database");
    
    $sql = "INSERT into crg_subscribe (email, datetime) values('".$email."',now())";
    
    $result = mysql_query($sql, $link);
    
    if($result){
        return 1;
    }else{
        return 0;
    }
    
}

?>