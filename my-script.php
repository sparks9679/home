<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Validate form data here

  $to = 'Sparks9679@Gmail.com';
  $headers = "From: $name <$email>" . "\r\n";
  $body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage: $message";

  if (mail($to, $subject, $body, $headers)) {
    // Message sent successfully
    // Provide feedback to visitor here
  } else {
    // Message failed to send
    // Provide feedback to visitor here
  }
}
