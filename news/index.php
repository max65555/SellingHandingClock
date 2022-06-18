<?php
	include('../database/dbHelper.php');
	include('../cart/cart-function.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Tin Tức</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/slick.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/base.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
	<?php 
		include '../front-end/header.php';
 	?>
	
	<div class="wrapper">
		<div class="slider">
			<button type="button" class="prev-slider button"><i class="fa fa-chevron-left"></i></button>
			<div class="slider-me">
				<div class="slider-items">
					<img src="../image/anhto2.jpg" alt="loading">
				</div class="slider-items">
				<div class="slider-items">
					<img src="../image/anhto2.jpg" alt="loading">
				</div>
				<div class="slider-items">
					<img src="../image/anhto2.jpg" alt="loading">
				</div>
			</div>
			<button type="button" class="next-slider button"><i class="fa fa-chevron-right"></i></button>
		</div>
		<div class="banner-slider">
			<?php
				 $sql = "select * from news";
				 $result = executeResult($sql);
				
			 ?>
		</div>
	</div>


	<div class="container" style="min-height: 800px;">
		<div class="news">
			<?php
			$id = '';
			if (isset($_GET['id'])) {
			 	$id = $_GET['id'];
			 	$sql = "select * from news where id_news= '$id'";
			 } 

			$result = executeResult($sql);
			foreach($result as $item) {
				echo '
					<div style="padding-top:20px">
						<div style="float:left;">
							<img src="../image/' . $item['anh'] . '" alt="">
						</div>
						<div style="padding-top:30px">
							<h1 class="title">'.$item['title'].'</h1>
							<p class="date">'.$item['created_at'].'</p>
							<p class="noidung">'.$item['text'].'</p>
						</div>
					</div>
					
				';
			}
		 ?>
		 
		</div>
		
	</div>

	

	<?php 
		include '../front-end/footer.php';
 	?>
</body>

</html>

<script src="../js/slick.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../jquery-3.5.1.min.js"></script>

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
		nextArrow: $('.next-slider')
	});
</script>


<style>
	.container {
		background-color: white;
		
	}
	
	.news {
		margin: auto;
		padding-top: 100px;
		display: grid;
		max-width: 1000px;
	}

	.title {
		font-weight: bold;
		font-size: 30px;
	}

	.date {
		margin: 20px 0;
	}

	.noidung {
		font-size: 18px;
		text-align: justify;
		line-height: 2;
	}
</style>