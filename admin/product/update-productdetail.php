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
				<span class="label label-default">Xin ch??o : ' . $_SESSION['username'] . '</span>
			  </form>
		</nav>';
} else {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Th??m/S???a Danh M???c S???n Ph???m</title>
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
	    <a class="nav-link" href="../category">Qu???n L?? Danh M???c</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../product/index.php">Qu???n L?? S???n Ph???m</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../user">Qu???n L?? Ng?????i D??ng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../statistical">Qu???n L?? ????n H??ng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../news">Qu???n L?? Tin T???c</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../contact">Danh s??ch li??n h???</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../logout.php">????ng Xu???t</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">S???a chi ti???t s???n ph???m</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label for="name">D??ng S???n Ph???m:</label>
						<input required="true" type="text" class="form-control" name="manhinh" value="<?= $dongsanpham ?>">
					</div>
					<!-- <div class="form-group">
						<label for="name">Gi?? S???n Ph???m:</label>
						<input required="true" type="text" class="form-control" name="price" value="<?= $id ?>">
					</div> -->
					<div class="form-group">
					  <label for="name">Lo???i M??y:</label>
					  <input required="true" type="text" class="form-control" name="dophumau" value="<?= $loaimay ?>">
					</div>
					<div class="form-group">
						<label for="name">C?? Ch??? Ho???t ?????ng:</label>
						<input required="true" type="text" class="form-control" name="ram" value="<?= $cochehoatdong ?>">
					</div>
					<div class="form-group">
					  <label for="name">K??ch C???:</label>
					  <input required="true" type="text" class="form-control" name="carddohoa" value="<?= $kichco ?>">
					</div>
					<div class="form-group">
					  <label for="name">????? D??y:</label>
					  <input required="true" type="text" class="form-control" name="pin" value="<?= $doday ?>">
					</div>
					<div class="form-group">
					  <label for="name">Ch???t Li???u V???:</label>
					  <input required="true" type="text" class="form-control" name="luutru" value="<?= $chatlieuvo ?>">
					</div>
					<div class="form-group">
					  <label for="name">Ch???t Li???u D??y:</label>
					  <input required="true" type="text" class="form-control" name="congketnoi" value="<?= $chatlieuday ?>">
					</div>
					<div class="form-group">
					  <label for="name">Ch???t Li???u K??nh:</label>
					  <input required="true" type="text" class="form-control" name="cannang" value="<?= $chatlieukinh ?>">
</div>
					<div class="form-group">
					  <label for="name">M???t S???:</label>
					  <input required="true" type="text" class="form-control" name="hedieuhanh" value="<?= $matso ?>">
					</div>
					<div class="form-group">
					  <label for="name">B???o H??nh Ch??nh H??ng:</label>
					  <input required="true" type="text" class="form-control" name="mausac" value="<?= $baohanhchinhhang ?>">
					</div>
					<button class="btn btn-success mt-3">L??u</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>