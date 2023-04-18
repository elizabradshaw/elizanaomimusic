<?php
if(isset($_POST['submit'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $subject = $_GET['subject'];
  $message = $_GET['message'];  

  $to = "elizabrads@gmail.com";
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";
  $headers .= "X-Mailer: PHP/".phpversion();

  $message_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

  if(mail($to, $subject, $message_body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
