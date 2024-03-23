<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.34">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Panel | OurLibrary.com</title>
<link rel="stylesheet" href="../../css/bootstrap5.css">
<script src="../../js/bootstrap5.js"></script>
<script src="../../js/fontawesome.js"></script>
<link rel="canonical" href="https://our-library.rf.gd/" />
<link rel="stylesheet" href="../../css/style.css">
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
  background:#fff;
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
table{
border-collapse:collapse;
margin: 0;
font-size:0.9em;
border-radius:5px 5px 0 0;
overflow:hidden;
box-shadow:0 0 20px rgba(0, 0, 0, 0.15);
}
table th{
background:#009879;
color:#fff;
text-align:center;
font-weight:bold;
}
table th, table td{
padding:12px 15px;
}
table tr{
border-bottom:1px solid #ddd;
}
table tr:nth-of-type(odd){
background:#f3f3f3;
}
table tr:last-of-type{
border-bottom:2px solid #009879;
}
.page-btn{
background:#fff;
color:#009789;
border:2px solid #009789;
text-decoration:none;
font-weight:bold;
padding:15px;
margin:10px;
}
.table-page{
width:100%;
padding:30px;
}
.update-btn {
  text-decoration:none;
  background:green;
  color:#fff;
  padding:7px;
  cursor:pointer;
  margin:5px;
}
.del-btn {
  text-decoration:none;
  background:red;
  color:#fff;
  padding:7px;
  margin:5px;
  cursor:pointer;
}
.crud {
	display:flex;
}
</style>
<body>
<nav>
	<a href="../admin-data.php" class="back">
		<i class="fas fa-undo" ></i>
	</a>
	<label class="logo">Showing All Books</label>
</nav>
<center>
<div class="page">
<table>
<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Description</th>
	<th>Image Path</th>
	<th>Link</th>
	<th>Time</th>
	<th>Operations</th>
</tr>
<?php 
require "../../core/_dbconnect.php";
        
$sql = "SELECT * FROM `posts`";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
echo "<br>";
if ($total != 0) {
	$a = 1;
    while ($a <= $total /*and $a <= 20*/) {
		$result = mysqli_fetch_assoc($data);
        echo '
        <tr>
        	<td>'.$result['ID'].'</td>
        	<td>'.$result['title'].'</td>
        	<td>'.$result['desc'].'</td>
       		<td>'.$result['path'].'</td>
        	<td>'.$result['link'].'</td>
        	<td>'.$result['time'].'</td>
        	<td>
        		<div class="crud">
        		<a href="up/index.php?id='.$result['ID'].'" class="update-btn">Update</a>
        		<a href="del/index.php?id='.$result['ID'].'" class="del-btn">Delete</a>
        		</div>
        	</td>
        </tr>';
        $a++;
	}
}
?>
</table>
</div>
<div class="table-page">
<?php
$num_btn = $total / 20;
$btns = (int)$num_btn + 1;
$b = 1;
?>
<button  class="page-btn">Prev</button>
<?php
while ($b <= $btns) {
	echo '
	<a href="#" class="page-btn">
    '.$b.'
    </a>';
    $b++;
}
?>
<button class="page-btn">Next</button>
</div>
</center>
</body>
</html>