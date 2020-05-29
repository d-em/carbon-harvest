<?php 

if (isset(&_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "d_em@mac.com";
  $headers = "From: ".$mailFrom;
  $txt = "Site enquiry from ".Sname.".".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsent");
}