<?php
if (isset($_GET['id'])) {
	require "../../../core/_dbconnect.php";
	$sql = "SELECT * FROM `all-books` WHERE `id`='".$_GET['id']."'";
	$data = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($data);
	
	$id = $result['id'];
	$name = $result['name'];
	$writer = $result['writer'];
	$type = $result['type'];
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
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Books Name...">
        <label for="writer">Writer</label>
        <input type="text" id="writer" name="writer" value="<?php echo $writer;?>" placeholder="Writers Name...">
        <label for="type">Type</label>
        <input type="text" id="type" name="type" value="<?php echo $type;?>" placeholder="Book Type...">
        <label for="path">Image Path</label>
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
	$name1 = $_POST['name'];
	$writer1 = $_POST['writer'];
	$type1 = $_POST['type'];
	$path1 = $_POST['path'];
	$link1 = $_POST['link'];

	$sql1 = "UPDATE `all-books` SET `id`='".$id1."',`name`='".$name1."',`writer`='".$writer1."',`type`='".$type1."',`path`='".$path1."',`link`='".$link1."' WHERE `id`='".$id."'";
	mysqli_query($conn, $sql1);
	header("location: ../index.php");
}
?>

</body>
</html>