<?php
$server = "sql213.epizy.com";
$user = "epiz_31448790";
$pass = "Cx0DUPIOkYc";
$dbname = "epiz_31448790_id18642250_books";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if (!$conn) {
  die("Sorry we failed to connect: ". mysqli_connect_error());
} else {
  //echo "Connection was successful";
}
?>