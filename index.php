<?php 
$to = "karnkung30.pbnblogspd@.blogger.com";
$subject = "My subject ทดสอบ";
$txt = "Hello world!";
$headers = "Content-Type: text/html; charset=UTF-8";
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)){
  echo 'sent-email ok';
}else{
  echo 'sent-email error.!!!';
}


?>