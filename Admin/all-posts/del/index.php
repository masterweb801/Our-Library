<?php
if (isset($_GET['id'])) {
	require "../../../core/_dbconnect.php";
	$sql = "DELETE FROM `posts` WHERE `ID`='".$_GET['id']."'";
	mysqli_query($conn, $sql);
	header("location: ../index.php");
}
?>