<?php
if (isset($_GET['id'])) {
	require "../../../core/_dbconnect.php";
	$sql = "DELETE FROM `all-books` WHERE `id`='".$_GET['id']."'";
	mysqli_query($conn, $sql);
	header("location: ../index.php");
}
?>