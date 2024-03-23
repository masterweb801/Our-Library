<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Panel | OurLibrary.com</title>
<link rel="canonical" href="https://our-library.rf.gd/" />
<script src="../../js/fontawesome.js"></script>

<style type="text/css">
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
  background:#c0c0c0;
}
nav{
  background: #8FBC8F;
  height: 80px;
  width: 100%;
  text-align:center;
}
a.active,a:hover{
  transition: .5s;
}
.back{
  font-size:20px;
  text-decoration:none;
  color:white;
  background:orange;
  padding:8px;
  border-radius:10px;
  float: left;
  margin-top:15px;
  margin-left:10px;
  cursor: pointer;
  line-height: 30px;
}
label.logo{
  color: #2F4F4F;
  font-size: 25px;
  line-height: 80px;
  font-weight: bold;
  margin: 0px;
  padding:0px;
}
.container {
	background:#fff;
	padding:15px;
	border-radius:15px;
	margin:15px;
	display:;
	position:static;
}
.title {
	display:flex;
	text-align:left;
	height:50px;
	width:100%;
}
.title h3 {
	color:black;
	padding:7px;
}
.title h6 {
	color:grey;
	padding:10px;
	float:right;
}
.e-mail {
	padding-bottom:15px;
}
.e-mail h5 {
	padding-left:15px;
	color:#423d3c;
}
.comment {
	padding-left:25px;
}
.comment p {
	padding-top:15px;
	padding-bottom:15px;
	padding-left:10px;
}
</style>

</head>
<body>
<nav>
	<a href="../admin-data.php" class="back">
		<i class="fas fa-undo" ></i>
	</a>
	<label class="logo">Showing All Comments</label>
</nav>
<?php
require "../../core/_dbconnect.php";

$sql = "SELECT * FROM `contact`";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
if ($total != 0) {
    $a = 1;
    while ($a <= $total) {
        $result = mysqli_fetch_assoc($data);
		echo '<div class="container">
		<div class="row">
		<div class="column">
		<div class="title">
		<h3><b>'.$result['Customer Full Name'].'</h3>
		<h6>'.$result['Time'].'</h6>
		</div>
		<div class="e-mail">
		<h5>'.$result['E-mail'].'</h5></b>
		</div>
		<div class="comment">
		<h4>'.$result['Subject'].'</h4>
		<p>
		'.$result['Message'].'
		</p>
		</div>
		</div>
		</div>
		</div>';
        $a++;
	}
} else {
	require "../../core/_no-result.php";
}
?>

</body>
</html>