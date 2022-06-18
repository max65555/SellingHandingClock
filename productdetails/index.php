<?php
	include('../database/dbHelper.php');
	session_start();
	$id = $_GET['id'];
	$sql = 'select * from category, product, productdetails where product.id_product = productdetails.id_product and category.id_category = product.id_category and product.id_product = '.$id;
	$result = executeResult($sql);
	$id_product = '';
	$price_product = '';
	foreach($result as $items) {
		$id_product = $items['id_product'];
		$price_product = $items['price_sale'];
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Chi tiết sản phẩm</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/productdetails.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<?php 
		include('../front-end/header.php');
	 ?>
	<div class="container">
		<div class="product-detail">
			<div class="product-detail-container">
			<?php
				$id = $_GET['id'];
				$sql = 'select * from category, product, productdetails where product.id_product = productdetails.id_product and category.id_category = product.id_category and product.id_product = '.$id;
				$result = executeResult($sql);
				foreach($result as $items) {
					echo '
								<div class="image-prateails">
									<img src="../image/'.$items['thumbnail'].'" alt="">
								</div>
								<ul>
									<li class="flex-ct"><strong>Hãng: </strong><img src="../image/'.$items['image_category'].'" alt="'.$items['name'].'"></li>
									<li><strong>Tên máy: </strong>'.$items['tiltle'].'</li>
									<li><strong>Giá: </strong>'.number_format($items['price_sale'],0,",",".").' VND</li>
									<li><strong>Dòng sản phẩm : </strong>'.$items['dongsanpham'].'</li>
									<li><strong>Loại máy : </strong>'.$items['loaimay'].'</li>
									<li><strong>Cơ chế hoạt động : </strong>'.$items['cochehoatdong'].'</li>
									<li><strong>Kích cỡ : </strong>'.$items['kichco'].'</li>
									<li><strong>Độ dày : </strong>'.$items['doday'].'</li>
									<li><strong>Chất liệu vỏ : </strong>'.$items['chatlieuvo'].'</li>
									<li><strong>Chất liệu dây : </strong>'.$items['chatlieuday'].'</li>
									<li><strong>Chất liệu kính : </strong>'.$items['chatlieukinh'].'</li>
									<li><strong>Mặt số : </strong>'.$items['matso'].'</li>
									<li><strong>Bảo hành chính hãng : </strong>'.$items['baohanhchinhhang'].'</li>
								</ul>			
							';
							
						}
						?>
						<div class="insurance">
							<div class="content-insurance">
								<h3>Bảo hành</h3>
							</div>
							<div class="infor-insurance">
								<ul>
									<li>1. Bảo hành chỉ có giá trị khi đồng hồ có THẺ hoặc SỔ BẢO HÀNH chính thức đi kèm, THẺ hoặc SỔ BẢO HÀNH được ghi đầy đủ và chính xác các thông tin như: mã số đồng hồ, mã đáy của đồng hồ (nếu có), nơi bán, ngày mua hàng. THẺ hoặc SỔ BẢO HÀNH phải được đóng dấu của Đại lý ủy quyền chính thức hoặc Cửa hàng bán ra và còn trong thời hạn bảo hành theo qui định của từng hãng đồng hồ.</li>
									<li>2. Thời gian bảo hành được tính từ ngày mua được ghi trên THẺ hoặc SỔ BẢO HÀNH và không được gia hạn sau khi hết thời hạn bảo hành theo qui định của mỗi hãng đồng hồ, theo tiêu chuẩn chung thời gian bảo hành của đồng hồ thường là 24 tháng (02 năm), ngoại trừ có các cam kết đặc biệt khác.</li>
									<li>3. Chỉ bảo hành miễn phí cho các hư hỏng về máy và các linh kiện bên trong của đồng hồ được xác định là do lỗi của nhà sản xuất.</li>
									<li>4. Chỉ bảo hành thay thế mới cho những linh kiện bên trong của đồng hồ, không thay thế hoặc đổi bằng một chiếc Đồng hồ khác.</li>
									<li>5. Tại hệ thống ĐỒNG HỒ TỐT Pin của đồng hồ được bảo hành và thay thế miễn phí không hạn chế thời gian. Ngoại trừ Pin của đồng hồ dòng Thể thao có chức năng đo thời gian (Chronograph) và đồng hồ có đèn soi mặt số (Loomi), đồng hồ sử dụng Pin năng lượng từ ánh sáng (Eco-Drive) sẽ áp dụng theo các chính sách bảo hành kèm theo.</li>
								</ul>
							</div>
							<div class="infor-insurance">
								<p>
									Từ 04/12 - 10/12 giảm 500.000đ khi mua đồng hồ tại DCDWATCH
								</p>
							</div>
						</div>
				</div>
				<div class="btn-link">
					<div class="price-product">
						<span>Giá: <?php echo number_format($price_product,0,",",".")?>VND</span>
					</div>
					<input type="hidden" value="<?php echo $id_product?>" name="id">
					<button class="btn-cart"><a href = "../cart/cart.php?id=<?php echo $id_product?>">Thêm vào giỏ hàng</a></button>
				</div>
		</div>
	</div>

	<?php 
		include('../front-end/footer.php');
	 ?>
</body>

</html>


<div id="particles-js" style="background-color: #f7f7f7; position: fixed; left: 0; right: 0; bottom: 0; top: 0; z-index: -1;"></div>

</script>