<footer style="background-color:#222222">
		<div class="footer-container">
			
			<div>
				<img  style="width:300px" src="../image/logofooter.png">
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
				<b style="color:white;">Copyright 2021 © Website thuộc về nhóm DCD</b>
		</div>
	</footer>