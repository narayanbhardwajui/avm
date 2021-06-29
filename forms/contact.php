<?php
 $from = "acevaluemanagement.com";
 $to = "info@acevaluemanagement.com";
 $subject = "Enquiry Form";
 $body = "From, ".$_POST['userName']."\n\n"."Email, ".$_POST['userEmail']."\n\n".$_POST['userMsg']."\n\n".$_POST['userPhone'];
 $headers = "From:" . $from;
 if (mail($to, $subject, $body, "$headers")) {
    $responseArray = array('class' => 'alert alert-success', 'message' => 'Message sent successfully. Thank you, will get back to you soon!');
  } else {
    $responseArray = array('class' => 'alert alert-danger', 'message' => 'There was an error while submitting the form. Please try again later.'); 
  }
  $encoded = json_encode($responseArray);
  header('Content-Type: application/json');
  echo $encoded;
 ?>