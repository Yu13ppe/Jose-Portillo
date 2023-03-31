<?php
  
  if (isset($_POST['send'])){
    if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['email'])) {
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $email = $_POST['email'];
      $header = "From: noreply@example.com" . "\r\n";
      $header .= "Reply-To: noreply@example.com" . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();
      $mail = @mail($email, $subject, $message, $header);
      if ($mail) {
        echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
      }
    }
  }

?>
