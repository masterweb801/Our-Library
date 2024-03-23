<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8617314221429955"
     crossorigin="anonymous"></script>
<title>Our Library</title>
<link rel="stylesheet" href="../../css/bootstrap5.css">
<script src="../../js/bootstrap5.js"></script>
<script src="../../js/fontawesome.js"></script>
<link rel="stylesheet" href="../../css/style.css">
<link rel="canonical" href="https://our-library.000webhostapp.com/" />
</head>
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
<body>

<nav>
	<a href="../index.php" class="back">
		<i class="fas fa-undo" ></i>
	</a>
	<label class="logo">Our Library</label>
</nav>

<div class="parent">

<div class="long">
<form action="book-search.php" method="get" >
<input type="text" name="query" placeholder="Type here...">
<button type="search" class="submit">Search</button>
</form></div>
<?php 
require "../../core/_dbconnect.php";

$sql = "SELECT * FROM `all-books`";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
echo "<br>";
if ($total != 0) {
    $a = 1;
    while ($a <= $total) {
        $result = mysqli_fetch_assoc($data);
        if ($result[type] != "Autobiography") {
        	echo '
        	<div class="card projects">
        	<img class="card-img-top" src="../../'.$result[path].'" alt="Card image cap">
		    <div class="card-body">
	        <h5 class="card-title">'.$result[name].'</h5>
	        <p class="card-text">'.$result[writer].'</p>
	        <a href="'.$result[link].'" class="more">Download</a>
			</div></div>';
        	$a++;
        } else {
        	echo '
        	<div class="card projects">
        	<img class="card-img-top" src="../../'.$result[path].'" alt="Card image cap">
        	<div class="card-body">
        	<h5 class="card-title">'.$result[name].'</h5>
        	<p class="card-text">'.$result[writer].'</p>
        	<a href="../../'.$result[link].'" class="more">Read More</a>
        	</div></div>';
        	$a++;
        }
    }
}

?>
</div>
</body>
</html>