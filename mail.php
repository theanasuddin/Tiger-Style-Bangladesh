<?php

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "info@tigerstylebd.com";
  $headers = "From: ".$mailFrom;
  $txt = "First Name: ".$firstname."\r\nLast Name: ".$lastname."\r\nEmail: ".$mailFrom."\r\nSubject: ".$subject."\r\nMessage: ".$message;
  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.php?mailsent");

  $mysqli = mysqli_connect('localhost', 'tigerstylebd', 'tsbl1971', 'tigerstylebd');

  if ($mysqli) {
    echo "Connection Successful";
  } else {
    echo "No Connection";
  }

  $query = "INSERT INTO `mail`(`first_name`, `last_name`, `email`, `subject`, `message`) VALUES ('$firstname','$lastname','$mailFrom','$subject','$message')";

  mysqli_query($mysqli, $query);

}
 ?>
