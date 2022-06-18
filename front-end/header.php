<nav style="background-color:black ;" class="nav-bar">		
		<div>
			<img  style="width: 201px; height: 174px;" src="../image/logoDongHo2.png">
		</div>
		<div class="search-bar-nav">
			<form action="../search">
				<input type="text" placeholder="Tìm kiếm...." name="name">
				<button class="search">
					<i class="fa fa-search"></i>
				</div>
			</form>
			
		</div>
		<div class="list-menu" style="color: white;">
			<ul>
				<li class="tt"><a href="../index.php" class="hv-ul" style="color: white">Trang chủ</a></li>
				<li>
					<a href="#" class="hv-ul" style="color: white;">Sản phẩm</a>
					<ul class="sub-menu">
						<?php
						$sql = 'select * from category';
						$result = executeResult($sql);

						foreach ($result as $items) {
							echo '
								<li><a href="../category?id=' . $items['id_category'] . '">' . $items['name'] . '</a></li>
							';
						}
						?>
					</ul>
				</li>
				<li><a href="../contact" class="hv-ul" style="color: white;">Liên hệ</a></li>
				<li><a href="../news" class="hv-ul" style="color: white;" >Tin tức</a></li>
				<li>
					<i class="fa fa-user login-icon"></i>
					<ul class="sub-menu">
						<?php
							if (isset($_SESSION['username'])) {
								echo '
									<li><a href="../logout" title="Xin chào ' . $_SESSION['username'] . '">Đăng xuất</a></li>
									<li><a href="../lich-su-mua-hang">Lịch sử mua hàng</a></li>
								';
							} else {
								echo '
									<li><a href="../login">Đăng nhập</a></li>
									<li><a href="../register">Tạo tài khoản</a></li>
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
						<li><a href="../cart/view-cart.php">Xem giỏ hàng</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>