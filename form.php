<?php
  echo "<html>";
  echo "<head>";
  echo "<title>Contact-form</title>";
  echo "</head>";
  echo "<body>";

  $email    = $_POST['email'];
  $message  = $_POST['message'];


  if ( isset($email) & isset($message)) {
    $to       = "sutinen.henri@gmail.com";
    $subject  = "Message from website";
    $body  = ": ".$email."\n ".$message."\n ";

if ($_POST['submit']) {
 mail($to, $subject, $body);

    echo "<p>SUCCESS!</p>";
  } else {
    echo "<p>FALE!!</p>";
  }
  }
  echo "</body>";
  echo "</html>";
  
  ?>