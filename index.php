<?php
	require "core/_dbconnect.php";
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$sql = "INSERT INTO `visitors`(`ip`) VALUES ('".$ip."')";
	mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="Library, Our Library, Books, NCTB Books, Novel Books, Guide Books, Bangla Books">
<meta name="description" content="We have a rich collection of books. Take a cup of coffee and review our Novels, Articles, Books."/>
<title>OurLibrary.com</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
<link rel="stylesheet" href="css/bootstrap5.css" >
<link rel="stylesheet" href="css/style.css">
<script src="js/bootstrap5.js"></script>
<script src="js/fontawesome.js"></script>
</head>
<body>
<section>

<?php require 'core/_nav.php';?>

<div class="parent" >
<div id="banner">
<img src="img/banner.jpeg" alt="banner">
</div>

<center>
<h1 class="line-start" >
Our Services
</h1>
</center>

<div class="card long">
<div class="card-header" style="margin-top:10px;" >
<h6 class="card-title"><b>All Books</b></h6>
</div>
<div class="card-body">
<p class="card-text">We have a rich collection of Books. Checkout your favourite book's PDF.</p>
<a href="book/all-books/index.php" class="btn btn-success">Visit</a>
</div></div>

<div class="card long">
<div class="card-header" style="margin-top:10px;" >
<h6 class="card-title"><b>NCTB Books</b></h6>
</div>
<div class="card-body">
<p class="card-text">We have a rich collection of NCTB's Books. Checkout your favourite book's PDF.</p>
<a href="book/nctb/index.php" class="btn btn-success">Visit</a>
</div></div>

<div class="card long">
<div class="card-header" style="margin-top:10px;" >
<h6 class="card-title"><b>Novel Books</b></h6>
</div>
<div class="card-body">
<p class="card-text">We have a rich collection of NCTB's Books. Checkout your favourite book's PDF.</p>
<a href="book/novels/index.php" class="btn btn-success">Visit</a>
</div></div>

<div class="card long">
<div class="card-header" style="margin-top:10px;" >
<h6 class="card-title"><b>Autobiography Books</b></h6>
</div>
<div class="card-body">
<p class="card-text">We have a rich collection of Autobiography Books. Checkout your favourite book's PDF.</p>
<a href="book/autobiography/index.php" class="btn btn-success">All Novels</a>
</div></div>

</div>
</body>
<html>