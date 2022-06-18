<?php
include('../database/dbHelper.php');
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

    $sql = "select * from admin where username = '$username' and password = '$password'";
    $result = executeResult($sql); 
    if($username == null || $password == null){
        echo '<span class="badge badge-danger">Vui lòng nhập tài khoản và mật khẩu!</span>';
    }
   	else  if ($result != null && count($result) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: category");
    } 
    else {
    	echo '<span class="badge badge-danger">Tài khoản và mật khẩu không đúng!</span>';
    }
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập admin</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="css/base.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="text-align: center">
	<div class="wrapper fadeInDown">
    <div id="formContent" style="border:2px solid #ccc; margin-left: 400px; margin-right: 400px;">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <br> <br>
      <div class="fadeIn first">
         <h1>Đăng nhập admin</h1> <br> <br>
      </div>

      <!-- Login Form -->
      <form method="post">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="Tài khoản"> <br> <br>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mật khẩu"> <br> <br>
        <input type="submit" class="fadeIn fourth" value="Đăng nhập" >
      </form>
    </div>
  </div>
</body>
</html>