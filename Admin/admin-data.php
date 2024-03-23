<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: index.php"); 
    exit;} 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Panel | OurLibrary.com</title>
<link rel="stylesheet" href="../css/bootstrap5.css">
<script src="../js/bootstrap5.js"></script>
<script src="../js/fontawesome.js"></script>
<link rel="canonical" href="https://our-library.rf.gd/" />
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
require "../core/_nav.php";
require "../core/_dbconnect.php";
$sql = "SELECT * FROM `visitors`";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
?>		
	<div class="card projects">
		<div class="card-body">
			<div class="row"> 
				<div class="block">
					<i class="fa fa-user" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
					<h2> <?php echo $total;?>+ </h2>
					<h5> Visitors </h5>
				</div>
			</div>
		</div>
	</div>

<div class="parent">
        <div class="card projects">
        <i class="fas fa-upload" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">Upload A New Book</h5>
        <p class="card-text">Always make sure that the image is<br>already uploaded.</p>
        <a href="up/index.php" style="text-decoration:none;" class="submit">Go To Upload Page</a>
        </div></div>
        
        <div class="card projects">
        <i class="fas fa-book" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">View All Books</h5>
        <p class="card-text">Check your books are alright or not.</p>
        <a href="all-books/index.php" style="text-decoration:none;" class="submit">Go To Books Page</a>
        </div></div>
        
        <div class="card projects">
        <i class="fas fa-plus" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">Make A New Post</h5>
        <p class="card-text">Post about trending topics and get<br>views on your website.</p>
        <a href="upp/index.php" style="text-decoration:none;" class="submit">Go To Upload Page</a>
        </div></div>
        
        <div class="card projects">
        <i class="fas fa-file" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">View All Posts</h5>
        <p class="card-text">Check your posts are alright or not.</p>
        <a href="all-posts/index.php" style="text-decoration:none;" class="submit">Go To Posts Page</a>
        </div></div>
        
        <div class="card projects">
        <i class="fas fa-folder" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">File Manager</h5>
        <p class="card-text">Upload, Download, Backup, Edit,<br>Delete etc functions are available<br>for your code.</p>
        <a href="https://filemanager.ai/new/#/c/185.27.134.11/epiz_31448790/eyJ0IjoiZnRwIiwiYyI6eyJwIjoiQ3gwRFVQSU9rWWMiLCJpIjoiXC8ifX0=" style="text-decoration:none;" class="submit">Go To Files</a>
        </div></div>
        
        <div class="card projects">
        <i class="fas fa-database" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">Database Manager</h5>
        <p class="card-text">Manage data in database for<br>dynamic Post, Books, Review etc.</p>
        <a href="http://185.27.134.10/login.php?2=epiz_31448790wejghelqwdtg3e54gVG1wak5VNTZTWGxOUkZVeVRWaDNhRWxUUldoSldIZzRaa2g0T0daSWVEaG1TSGhxVjFkMFVGTldRbFpTUkVJMFVYYzlQUT09wejghelqwdtg3e54gsql213.epizy.comwejghelqwdtg3e54gepiz_31448790_id18642250_books&db=epiz_31448790_id18642250_books" style="text-decoration:none;" class="submit">Go To Database</a>
        </div></div>
        
        <div class="card projects">
        <i class="fas fa-comment" style="font-size:100px; padding:15px; color:#2f4f4f;"></i>
        <div class="card-body">
        <h5 class="card-title">View All Comments</h5>
        <p class="card-text">Checkout your customers<br>comments on your website.</p>
        <a href="comment/index.php" style="text-decoration:none;" class="submit">Go To Comments Page</a>
        </div></div>
</div>
</body>
</html>