<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.wrapper
		{
			width: 1600px;
			height: 700px;
			background: red;
			margin: auto;
		}
		.header
		{
			height: 59px;
			border: 1px solid lightblue;
		}
		.img
		{
			float: left;
		}
		.form
		{
			margin-top:30px;
			margin-left: 500px;
		}
		.dn
		{
			float: right;
			display: inline-block;
			margin-right: 100px;
			margin-top: -40px;
		}
		.menu
		{
			height: 30px;
			background: yellow;
		}
		.menu ul li
		{
			list-style: none;
			display: inline-block;
			line-height: 30px;
			width: 200px;
			text-align: center;
		}
		.menu ul li:hover
		{
			background: white;
			color: gray;
		}
		.content
		{
			height: 300px;
			border: 1px solid gray;

		}
		.left
		{
			width: 20%;
			background: yellow;
			float: left;
			height: 600px;
		}
		.left ul li a
		{
			list-style: none;
			text-align: center;
			margin-left: 50px;
			text-decoration: none;
			color: black;
		}
		.left ul li 
		{
			list-style: none;
		}
		.right
		{
			width: 80%;
			background: white;
			height: 600px;
			float: right;
		}
		.right table tr td 
		{
			text-align: center;
		}
		.right table
		{
			border-color: aquamarine;
			border-style: groove;
		}
		.footer
		{
			width: 100%;
			height: 390px;
			background: white;
		}
	</style>
</head>
<body>
	<?php 
				$connect = mysqli_connect('localhost','root','','online_shopping_website');
				if(!$connect){
					echo "Kết nối thất bại";
				}
				$sql="SELECT * FROM product";

				$result = mysqli_query($connect,$sql);

				//Tìm và trả về kết quả dưới dạng 1 mảng và lấy từng dòng dữ liệu
				?>
      <div class="wrapper">
		<div class="header">
			<img src="https://fptshop.com.vn/uploads/originals/2019/12/30/637133160350737542_201407171129187887_1378267132_fptshop-ver1-0-logo-color-bg-black.jpg" height="75px" width="250px" class="img">
			<div>
				<form class="form">
					<input type="text" name="search" width="50px" placeholder="Tìm Kiếm">
					<input type="submit" name="">
				</form>
			</div>
			<div class="dn">
				<p><a href="register.php">Đăng kí</a> &nbsp; &nbsp; <a href="login2.php">Đăng nhập</a></p>
		
			</div>
		</div>

		<div class="menu">
			<ul>
				<li>Điện Thoại
				</li>
				<li>Laptop</li>
				<li>Tablet</li>
				<li>Phụ Kiện</li>
				<li>Đồng hồ thông minh</li>
				<li><a href="addproduct.php"> Thêm sản phẩm</li>
			</ul>
		</div>

		<div class="content">
			<div class="left">
				<ul>
					<br><br><li><a href="">Iphone</a></li><br><br>
					<li><a href="">SamSung</a></li><br><br>
					<li><a href="">oppo</a></li><br><br>
					<li><a href="">Xiaomi</a></li><br><br>
					<li><a href="">Iphone cu 99</a></li><br><br>
				</ul>
			</div>
			<div class="right">
				<table border="1px" align="center" >
					<?php 
						$i = 1; 

						while($row = mysqli_fetch_array($result))
							{

								//lấy ra từng dòng dữ liệu truy vấn được và hiển thị
								//$row['product_id'];
								//$row['product_name'];
								//$row['product_img'];
								//$row['product_price'];
								if ($i == 1) 
								{
									echo " <tr> ";
								}								
								?>
										<td width="320px"; height="200px">
											<div class="single-product">
												<h3 > <?php echo $row['product_name'] ?> </h3>
												<img src="img/<?php echo $row['product_image'] ?>" width="180px" height="130px">
												<p> <b> Giá tiền: <?php echo $row['product_price'] ?> </b> </p>
												<a href="detail.php?id=<?php echo $row['product_id'] ?> "> Chi tiết</a>
											</div>
										</td>									
								<?php
								if ($i == 5) 
								{
									echo " </tr> ";
									$i = 1;
								}			
								$i++;
							}
					       ?>

				</table>
			</div>
		</div>


		<div class="footer"></div>
	</div>
</body>
</html>