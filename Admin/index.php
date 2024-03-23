<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.6">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="Library, Our Library, Books, NCTB Books, Novel Books, Guide Books, Bangla Books">
<meta name="description" content="We have a rich collection of books. Take a cup of coffee and review our Novels, Articles, Books."/>
<title>Admin Login | OurLibrary.com</title>
<link rel="icon" href="../img/icon.png" type="image/icon type">
<script src="../js/fontawesome.js"></script>
<style>
.login-form{
    width:450px;
    background:white;
    box-shadow:0px 5px 10px black;
}
.login-form h3{
    text-align:center;
    background:#009879;
    color:#fff;
    padding:12px 0px;
}
.login-form form{
    padding:30px 60px;
}
.login-form form input-field{
    display:flex;
    flex-direction:row;
    margin:10px 0px;
}
i{
    color:darkslategray;
    padding:10px 14px;
    background:#f2f4f6;
    margin-right:4px;
}
input{
    background:#f2f4f6;
    padding:10px;
    border:none;
    /*width:100%;*/
    padding-left:15px;
    width:75%;
}
button{
    width:100%;
    background:#04aa6d;
    padding:8px;
    border:none;
    font-size:16px;
    font-weight:500;
    color:white;
    margin:15px 0;
    transition:background-color 0.4s;
}
button:hover{
    background:#41b6e6;
}
.parent{
    text-align:center;
}
</style>
</head>

<body>

<div class="parent" >
<center>
<div class="login-form">
<h3>Admin Login Panel</h3>
<form method="POST" >
<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" name="admin-name" placeholder="Username">
</div>
<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" name="admin-pass" placeholder="Password">
</div>
<button name="login" type="submit">Log In</button>
</form>
</div>
</center>
</div>

<?php 
if(isset($_POST['login'])){ 
    $usr = $_POST['admin-name'];
    $pas = $_POST['admin-pass']; 
    if($usr == "html" and $pas == "Karim-123456"){
    	//echo "<script>
    	//alert('Correct Password')
    	//</script>";
        session_start();
        $_SESSION['logged'] = TRUE; 
        echo "<script>window.location.href='admin-data.php';</script>";
        header("location: admin-data.php");
        exit();
    }
    else{ 
        echo "<script>
        alert('Incorrect Password')
        </script>";
        exit(); 
    } 
}
?>

</body>
</html>