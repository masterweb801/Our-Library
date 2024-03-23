<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  
  require '../core/_dbconnect.php';
  
  $sql = "INSERT INTO `contact`(`Customer Full Name`, `E-mail`, `Subject`, `Message`) VALUES ('".$name."', '".$mail."', '".$subject."', '".$message."')";
  $data = mysqli_query($conn, $sql);
  //$mailTo = "progvillain@gmail.com";
  //$headers = "From: ".$mailFrom;
  //$txt = "You have received an e-mail from ".$name."\n\n".$message;
  
  //mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsent");
}