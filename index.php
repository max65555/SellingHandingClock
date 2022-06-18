<?php
	include('database/dbHelper.php');
	include('cart/cart-function.php');
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/base.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
	<nav style="background-color:black ;" class="nav-bar">
		<div class="page-logo">
			<img  style="width: 201px; height: 174px;" src="./image/logoDongHo2.png">
		</div>
		<div class="search-bar-nav">
			<form action="search">
				<input type="text" placeholder="Tìm kiếm...." name="name">
				<button class="search">
					<i class="fa fa-search"></i>
				</div>
			</form>
			
		</div>
		<div class="list-menu" style="color:white">
			<ul>
				<li><a href="index.php" class="hv-ul" style="color: white;">Trang chủ</a></li>
				<li>
					<a href="#" class="hv-ul" style="color: white;" >Sản phẩm</a>
					<ul class="sub-menu">
						<?php
						$sql = 'select * from category';
						$result = executeResult($sql);

						foreach ($result as $items) {
							echo '
								<li><a href="category?id=' . $items['id_category'] . '">' . $items['name'] . '</a></li>
							';
						}
						?>
					</ul>
				</li>
				<li><a href="contact" class="hv-ul" style="color: white;" >Liên hệ</a></li>
				<li><a href="news" class="hv-ul" style="color: white;" >Tin tức</a></li>
				<li>
					<i class="fa fa-user login-icon"></i>
					<ul class="sub-menu">
						<?php
							if (isset($_SESSION['username'])) {
								echo '
									<li><a href="logout" title="Xin chào ' . $_SESSION['username'] . '">Đăng xuất</a></li>
									<li><a href="lich-su-mua-hang">Lịch sử mua hàng</a></li>
								';
							} else {
								echo '
									<li><a href="login">Đăng nhập</a></li>
									<li><a href="register">Tạo tài khoản</a></li>
								';
							}
						?>
					</ul>
				</li>
				<li>
					<i class="fa fa-shopping-cart">
						<?php 
							$sum = 0;
							$cart = (isset($_SESSION['cart'])) ?$_SESSION['cart'] : [];

							
							foreach ($cart as $key => $items) {
							    $sum += $items['quantily'];
							    
							}
							echo '<span>'.$sum.'</span>';
						 ?>
					</i>
					<ul class="sub-menu">
						<li><a href="cart/view-cart.php">Xem giỏ hàng</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="wrapper">
		<div class="slider">
			<button type="button" class="prev-slider button"><i class="fa fa-chevron-left"></i></button>
			<div class="slider-me">
					<div class="slider-items">
							<img src="./image/banner.jpg" alt="loading" style="width:100%">
						</div class="slider-items">
						<div class="slider-items">
							<img src="./image/anhto2.jpg" alt="loading" style="width:100%">
						</div>
						<div class="slider-items">
							<img src="./image/anhto2.jpg" alt="loading" style="width:100%">
						</div>
					</div>
			<button type="button" class="next-slider button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="banner-slider">
				<?php
					$sql = "select * from news";
					$result = executeResult($sql);
					foreach($result as $item) {
						
					}
				?>
			</div>
	</div>


	<div class="list-sale-product">
		
		<div class="product-sale-container">
			<?php
			$sql = 'select * from product where tinhtrang = "sale"  ORDER BY price_sale DESC limit 1,5';
			$productSale = executeResult($sql);

			foreach ($productSale as $item) {
				echo '
						<div class="sale-product sale-product-h">
							<div class="image-product">
								<img src="image/' . $item['thumbnail'] . '" alt="">
							</div>
							<div class="tiltle-product">
								<span>
									' . $item['tiltle'] . '
								</span>
							</div>

							<div class="product-price"> 
								<span>Giá:</span>
								<div class="price-old" style="text-decoration: line-through;"> ' . number_format($item['price'], 0, ",", ".") . ' đ </div>/
								<div class="price-new"> ' . number_format($item['price_sale'], 0, ",", ".") . '₫ </div> </div>
							<div class="infor-sale">
								<span>
									Giảm giá có quà tặng kèm
								</span>
							</div>

							<div class="add-to-cart">
								<button><a href="cart/cart.php?id=' . $item['id_product'] . '">Thêm vào giỏ hàng</a></button>
							</div>

							<div class="details-product">
								<span><a href="productdetails?id=' . $item['id_product'] . '">Xem thông tin chi tiết</a></span>
							</div>
						</div>
					';
			}
			?>
		</div>
	</div>




	<div class="list-sale-product">
	    <div class="content-sale button-hex" style="background-color:#222222">
			<h1 style="color: white;">DANH MỤC SẢN PHẨM</h1>
		</div> 
		
		<div class="search-bar">
			
			<div class="brand-name">
				<div class="tiltle-brand-name">
					<h1>Thương hiệu</h1>
				</div>
				<?php
				$sql = 'select * from category';
				$result = executeResult($sql);

				foreach ($result as $items) {
					echo '
							<a href="category?id= ', $items['id_category'], '" class="link-category"><img src="image/' . $items['image_category'] . '" alt=""></a>
						';
				}
				?>
			</div>


			<div class="price-range">
				<div class="tiltle-price-range">
					<h2>Khoảng giá</h2>
				</div>
				<div class="content-price-range">
					<ul>
						<li><a href="search?price=5000000">Trên 50 triệu</a></li>
						<li><a href="search?price=40000000&prices=50000000">40 - 50 triệu</a></li>
						<li><a href="search?price=30000000&prices=40000000">30 - 40 triệu</a></li>
						<li><a href="search?price=20000000&prices=30000000">20 - 30 triệu</a></li>
						<li><a href="search?price=10000000&prices=20000000">10 - 20 triệu</a></li>
						<li><a href="search?price=999999">Dưới 10 triệu</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="product-sale-container">
			<?php
			$sql = "SELECT * FROM product order by id_product ASC LIMIT 8";
			$productList = executeResult($sql);
			foreach ($productList as $item) {
				echo '
						<div class="sale-product">
							<div class="image-product">
								<img src="image/' . $item['thumbnail'] . '" alt="">
							</div>
							<div class="tiltle-product">
								<span>
									' . $item['tiltle'] . '
								</span>
							</div>

							<div class="product-price"> 
							<span>Giá:</span>
							<div class="price-old" style="text-decoration: line-through;"> ' . number_format($item['price'], 0, ",", ".") . ' đ </div>/
							<div class="price-new"> ' . number_format($item['price_sale'], 0, ",", ".") . '₫ </div> </div>

							<div class="infor-sale">
								<span>
									Giảm giá có quà tặng kèm
								</span>
							</div>

							<div class="add-to-cart">
								<button><a href="cart/cart.php?id=' . $item['id_product'] . '">Thêm vào giỏ hàng</a></button>
							</div>

							<div class="details-product">
								<span><a href="productdetails?id=' . $item['id_product'] . '">Xem thông tin chi tiết</a></span>
							</div>

						</div>
					';
			}
			?>
		</div>
		<div class="all-product button-hex">
			<span>
				<a href="search?all-product">Tất cả sản phẩm</a>
			</span>
		</div>
	</div>

	<footer style="background-color:#222222">
		<div class="footer-container">
			
			<div>
				<img  style="width:300px" src="./image/logofooter.png">
			</div>

			<div class="product-services items-footer">
				<h2 class="content-items-footer">SẢN PHẨM VÀ DỊCH VỤ</h2>
				<ul>
					<?php
					$sql = 'select * from category';
					$result = executeResult($sql);

					foreach ($result as $items) {
						echo '
								<li><a href="category?id=' . $items['id_category'] . '">Đồng hồ ' . $items['name'] . '</a></li>
							';
					}
					?>
				</ul>
			</div>

			<div class="items-footer">
				<h2 class="content-items-footer">
					CHÍNH SÁCH
				</h2>
				<ul>
					<li><a href="#">Bảo hành</a></li>
					<li><a href="#">Vận chuyển</a></li>
					<li><a href="#">Thanh toán</a></li>
				</ul>
			</div>

			<div class="items-footer">
				<h2 class="content-items-footer">
					THÔNG TIN LIÊN HỆ
				</h2>
				<ul class="#">
					
					<li><a>Gmail: dcdwatch@gmail.com</a></li>
					<li><a>Tel: 10001991019</a></li>
					<li><a>Địa chỉ: 235 Hoàng Quốc Việt, Hà Nội</a> </li>
				</ul>
			</div>
		</div>
		<div style="background-color: black; width:100%; height:40px; text-align:center;" class="copy-right">
		<br>
				<b style="color:#f5cf41">Copyright 2021 © Website thuộc về nhóm DCD</b>
		</div>
	</footer>
	
</body>

</html>

<script src="js/slick.js"></script>
<script src="js/slick.min.js"></script>


<script>
	$('.slider-me').slick({
		responsive: [{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		],
		prevArrow: $('.prev-slider'),
		nextArrow: $('.next-slider'),
	});
	$('.autoplay').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		prevArrow: $('.prev-slider-product'),
		nextArrow: $('.next-slider-product'),
	});
</script>

<script src="js/particles.js"></script>
