<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  

  $email_from = 'usmanghani39@gmail.com';
  $email_subject = "New Form Submission"

//   $email_body = "User Name: $name.\n".
//   "User Email: $visitor_email.\n".
//   "User Message: $message.\n";

  $mailto = "usmanghani39@gmail.com";
  $headers = "From: ".$email_from;
  $txt = "You have received an e-mail from " .$name.".\n\n".$message;

//   $headers .= "Reply-To: $visitor_email \r\n";

  mail($mailto,$email_subject,$txt,$headers);

  header("Location: index.htm");
}
?>
