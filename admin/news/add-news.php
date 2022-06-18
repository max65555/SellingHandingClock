<?php
include('../../database/dbhelper.php');
$title = '';
$text = '';

if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from news where id_news = ' . $id;
	$product = executeSingleResult($sql);
	if ($product != null) {
		$anh = $product['anh'];
		$title = $product['title'];
		$text = $product['text'];
	}
}

if (!empty($_POST)) {
	if (isset($_POST['title'])) {
		//$anh = $_POST['anh'];
		$anh = $_POST['anh'];
		$title = $_POST['title'];
		$text = $_POST['text'];
	}

	if (isset($_POST['id_news'])) {
		$id = $_POST['id_news'];
	}
	if (!empty($title)) {
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if ($id == "") {
			$sql = 'insert into news(anh,title, text, created_at, updated_at) values ("' . $anh . '","' . $title . '", "' . $text .'", "' . $created_at . '", "' . $updated_at . '")';
		} else {
			$sql = 'update news set title = anh = "' . $anh . '","' . $title . '", text = "' . $text . '" , updated_at = "' . $updated_at . '" where id_news = ' . $id;
		}
		execute($sql);
		header('Location: index.php');
	}
}


session_start();
if (isset($_SESSION['username'])) {
	echo '<nav class="navbar navbar-light bg-light">
			  <form class="container-fluid justify-content-start">
				<span class="label label-default">Xin chào : ' . $_SESSION['username'] . '</span>
			  </form>
		</nav>';
} else {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Thêm/Sửa Tin Tức</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="../category">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../product/index.php">Quản Lý Sản Phẩm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../user">Quản Lý Người Dùng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../statistical">Quản Lý Đơn Hàng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../news">Quản Lý Tin Tức</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../logout.php">Đăng Xuất</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm tin tức</h2>
			</div>
			<div class="panel-body">
				<form method="post">
<div class="form-group">
						<input type="text" name="id" value="<?= $id ?>" hidden="true">
						<label for="name">Ảnh tin tức:</label>
						<input required="true" type="file" class="form-control" name="anh">
						<label for="name">Tiêu đề:</label>
						<input required="true" type="text" class="form-control" name="title" value="<?= $title ?>">
					</div>
					<div class="form-group">
						<label for="name">Nôi dung:</label>
						<input class="form-control" type="text" name="text" value="<?= $text ?>"></input> 
					</div>
					<button class="btn btn-success mt-3">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>