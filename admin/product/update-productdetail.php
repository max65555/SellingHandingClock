<?php
include('../../database/dbhelper.php');
$id_product = '';
$dongsanpham = '';
$loaimay = '';
$cochehoatdong = '';
$kichco = '';
$doday = '';
$chatlieuvo = '';
$chatlieuday = '';
$chatlieukinh = '';
$matso = '';
$baohanhchinhhang = '';
$id = '';


if (!empty($_POST)) {
	if (isset($_POST['dongsanpham'])) {
		$dongsanpham = $_POST['dongsanpham'];
		$loaimay = $_POST['loaimay'];
		$cochehoatdong = $_POST['cochehoatdong'];
		$kichco = $_POST['kichco'];
		$doday = $_POST['doday'];
		$chatlieuvo = $_POST['chatlieuvo'];
		$chatlieuday = $_POST['chatlieuday'];
		$chatlieukinh = $_POST['chatlieukinh'];
		$matso = $_POST['matso'];
		$baohanhchinhhang = $_POST['baohanhchinhhang'];

	}
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	

	if (!empty($vixuly)) {
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if($id != '') {
			$sql = 'update productdetails set dongsanpham = "' . $dongsanpham . '", id_product = "' . $id . '", loaimay = "' . $loaimay
			 . '",cochehoatdong = "' . $cochehoatdong . '", kichco = "' . $kichco . '", doday= "' . $doday. '", chatlieuvo = "' . $chatlieuvo . '", chatlieuday = "' . $chatlieuday . '" , chatlieukinh= "' . $chatlieukinh. '" , matso= "' . $matso. '" , baohanhchinhhang= "' . $baohanhchinhhang. '", updated_at= "' . $updated_at. '" where id_productdetail = ' . $id;
		}
		$result = execute($sql);
		print_r($result);
		// header('Location: index.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from productdetails where id_productdetail = ' . $id;
	$product = executeSingleResult($sql);
	if ($product != null) {
		$id_product = $product['id_product'];
		$dongsanpham = $product['dongsanpham'];
		$loaimay = $product['loaimay'];
		$cochehoatdong = $product['cochehoatdong'];
		$kichco = $product['kichco'];
		$doday = $product['doday'];
		$chatlieuvo = $product['chatlieuvo'];
		$chatlieuday = $product['chatlieuday'];
		$chatlieukinh = $product['chatlieukinh'];
		$matso = $product['matso'];
		$baohanhchinhhang = $product['baohanhchinhhang'];
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
	<title>Thêm/Sửa Danh Mục Sản Phẩm</title>
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
	    <a class="nav-link active" href="../product/index.php">Quản Lý Sản Phẩm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../user">Quản Lý Người Dùng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../statistical">Quản Lý Đơn Hàng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../news">Quản Lý Tin Tức</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../contact">Danh sách liên hệ</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../logout.php">Đăng Xuất</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa chi tiết sản phẩm</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label for="name">Dòng Sản Phẩm:</label>
						<input required="true" type="text" class="form-control" name="manhinh" value="<?= $dongsanpham ?>">
					</div>
					<!-- <div class="form-group">
						<label for="name">Giá Sản Phẩm:</label>
						<input required="true" type="text" class="form-control" name="price" value="<?= $id ?>">
					</div> -->
					<div class="form-group">
					  <label for="name">Loại Máy:</label>
					  <input required="true" type="text" class="form-control" name="dophumau" value="<?= $loaimay ?>">
					</div>
					<div class="form-group">
						<label for="name">Cơ Chế Hoạt Động:</label>
						<input required="true" type="text" class="form-control" name="ram" value="<?= $cochehoatdong ?>">
					</div>
					<div class="form-group">
					  <label for="name">Kích Cỡ:</label>
					  <input required="true" type="text" class="form-control" name="carddohoa" value="<?= $kichco ?>">
					</div>
					<div class="form-group">
					  <label for="name">Độ Dày:</label>
					  <input required="true" type="text" class="form-control" name="pin" value="<?= $doday ?>">
					</div>
					<div class="form-group">
					  <label for="name">Chất Liệu Vỏ:</label>
					  <input required="true" type="text" class="form-control" name="luutru" value="<?= $chatlieuvo ?>">
					</div>
					<div class="form-group">
					  <label for="name">Chất Liệu Dây:</label>
					  <input required="true" type="text" class="form-control" name="congketnoi" value="<?= $chatlieuday ?>">
					</div>
					<div class="form-group">
					  <label for="name">Chất Liệu Kính:</label>
					  <input required="true" type="text" class="form-control" name="cannang" value="<?= $chatlieukinh ?>">
</div>
					<div class="form-group">
					  <label for="name">Mặt Số:</label>
					  <input required="true" type="text" class="form-control" name="hedieuhanh" value="<?= $matso ?>">
					</div>
					<div class="form-group">
					  <label for="name">Bảo Hành Chính Hãng:</label>
					  <input required="true" type="text" class="form-control" name="mausac" value="<?= $baohanhchinhhang ?>">
					</div>
					<button class="btn btn-success mt-3">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>