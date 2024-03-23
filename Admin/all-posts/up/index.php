<?php
if (isset($_GET['id'])) {
	require "../../../core/_dbconnect.php";
	$sql = "SELECT * FROM `posts` WHERE `ID`='".$_GET['id']."'";
	$data = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($data);
	
	$id = $result['ID'];
	$title = $result['title'];
	$desc = $result['desc'];
	$path = $result['path'];
	$link = $result['link'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Our Library</title>
<link rel="stylesheet" href="../../../css/style.css">
<script src="../../../js/fontawesome.js"></script>
<link rel="canonical" href="https://our-library.rf.gd/" />
</head>
<body>
<div class="parent"> 

<div class="container">
  <div style="text-align:center">
    <h2>Update The Book</h2>
  </div>
  <div class="row">
    <div class="column">
      <form method="post">
      	<label for="id">ID</label>
      	<input type="text" id="id" name="id" value="<?php echo $id;?>" placeholder="Books ID...">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?php echo $title;?>" placeholder="Books Name...">
        <label for="desc">Your Message</label>
        <textarea id="desc" name="desc" style="height:170px"><?php echo $desc;?></textarea>
        <input type="text" id="path" name="path" value="<?php echo $path;?>" placeholder="Image Path...">
        <label for="link">Book Download Link</label>
        <input type="text" id="link" name="link" value="<?php echo $link;?>" placeholder="Download Link...">
        <button type="submit" class="submit"  name="submit">Update</button>
      </form>
    </div>
  </div>
</div>

</div>

<?php
if (isset($_POST['submit'])) {
	$id1 = $_POST['id'];
	$title1 = $_POST['title'];
	$desc1 = $_POST['desc'];
	$path1 = $_POST['path'];
	$link1 = $_POST['link'];

	$sql1 = "UPDATE `posts` SET `ID`='".$id1."',`title`='".$title1."',`desc`='".$desc1."',`path`='".$path1."',`link`='".$link1."' WHERE `ID`='".$id."'";
	mysqli_query($conn, $sql1);
	header("location: ../index.php");
}
?>

</body>
</html>