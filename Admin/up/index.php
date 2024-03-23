<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Our Library</title>
<link rel="stylesheet" href="../../css/style.css">
<script src="../../js/fontawesome.js"></script>
<link rel="canonical" href="https://our-library.rf.gd/" />

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
</style>

</head>
<body>
<nav>
	<a href="../admin-data.php" class="back">
		<i class="fas fa-undo" ></i>
	</a>
	<label class="logo">Add Books</label>
</nav>

<div class="parent"> 

<div class="container">
  <div style="text-align:center">
    <h2>Add New Book</h2>
  </div>
  <div class="row">
    <form method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Books Name...">
      <label for="writer">Writer</label>
      <input type="text" id="writer" name="writer" placeholder="Writers Name...">
      <label for="type">Type</label>
      <input type="text" id="type" name="type" placeholder="Book Type...">
      <label for="path">Image Path</label>
      <input type="text" id="path" name="path" placeholder="Image Path...">
      <label for="link">Book Download Link</label>
      <input type="text" id="link" name="link" placeholder="Download Link...">
      <button type="submit" class="submit"  name="submit">Upload</button>
    </form>
  </div>
</div>

</div>

<?php
if (isset($_POST['submit'])) {
	require "../../core/_dbconnect.php";
	$name = $_POST['name'];
	$writer = $_POST['writer'];
	$type = $_POST['type'];
	$path = $_POST['path'];
	$link = $_POST['link'];
	
	$sql = "INSERT INTO `all-books`(`name`, `writer`, `type`, `path`, `link`) VALUES ('".$name."', '".$writer."', '".$type."', '".$path."', '".$link."')";
	mysqli_query($conn, $sql);
}
?>

</body>
</html>