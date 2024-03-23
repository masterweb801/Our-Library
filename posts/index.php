<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="Library, Our Library, Books, NCTB Books, Novel Books, Guide Books, Bangla Books">
<meta name="description" content="We have a rich collection of Books. Take a cup of coffee and review our Novels, Articles, Books."/>
<title>Book Categories | OurLibrary.com</title>
<link rel="stylesheet" href="../css/bootstrap5.css" >
<link rel="stylesheet" href="../css/style.css">
<script src="../js/bootstrap5.js"></script>
<script src="../js/fontawesome.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8617314221429955"
     crossorigin="anonymous"></script>
</head>
<style type="text/css">
.column .card-img-top {
	width:70%;
}
</style>
<body>
<section>

<?php require '../core/_nav.php'; ?>

<div class="parent" >
<center>

<?php 
require "../core/_dbconnect.php";

$sql = "SELECT * FROM `posts`";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
echo "<br>";
if ($total != 0) {
    $a = 1;
    while ($a <= $total) {
        $result = mysqli_fetch_assoc($data);
        echo '
        <div class="container" style="width:auto;" >
        <div class="row" >
        <div class="column" >
        <img class="card-img-top" src="'.$result[path].'" alt="Card image cap">
        </div>
        <div class="column" >
        <div class="card-body">
        <h6 class="card-title"><b>'.$result[title].'</b></h6>
        <p class="card-text">'.$result[desc].'</p>
        <a href="'.$result[link].'" class="btn btn-success">Read More</a>
        </div>
        </div>
        </div>
        </div>';
    	$a++;
    }
}

?>

</center>
</div>
</body>
</html>