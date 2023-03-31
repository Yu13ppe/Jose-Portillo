<?php
  
  if (isset($_POST['send'])){
    if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['email'])) {
      $to = "joseportillo2002.jdpf@gmail.com";
      $subject = $_POST['subject'];
      $message = "Name: " . $_POST['name'] . "<br>";
      $message .= "Email: " . $_POST['email'] . "<br>";
      $message .= "Message: " . $_POST['message'] . "<br>";

      $headers = "From: remitente@example.com\r\n";
      $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
      $headers .= "Content-type: text/html\r\n";

      if(mail($to, $subject, $message, $headers)) {
        echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
      } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
      }
    }
  }

?>
