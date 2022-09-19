<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			text-align: center;
		}
		form
		{
			margin-top: 200px;
			width: 380px;
			background: #ebf20c;
			height: 380px;
			padding-top: 20px;
			margin-left: 580px;
			border-radius: 25px;

			background-image: url(https://kienthucmoi.net/img/2021/09/21/anh-meo-dep-0.jpg);
		}
	</style>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Product ID</td>
				<td><input type="text" name="product_id"></td> <br>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="product_name"></td> <br>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="product_price"></td> <br>
			</tr>
			<tr>
				<td>Product Img</td>
				<td><input type="file" name="product_image" style="padding-left: 80px;"></td><br><br>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" name="add_product" value="Add"></td> <br>
			</tr>
		</table>
	</form>
	
	<?php
		$connect = mysqli_connect('localhost', 'root', '', 'online_shopping_website');
		if (isset($_POST['add_product'])) {
		$product_id =$_POST['product_id'];
		$product_name =$_POST['product_name'];
		$product_price =$_POST['product_price'];
		//lấy ảnh từ thư mục bất kỳ của máy tính
		$product_image =$_FILES['product_image']['name'];
		//di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
		$product_image_tmp =$_FILES['product_image']['tmp_name'];
		//đưa ảnh từ thư mục tmp sang thư mục cần lưu
		move_uploaded_file($product_image_tmp, "img/$product_image");
		//thêm sản phẩm vào cơ sở dữ liệu
		$sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_image','$product_price')";
		$result = mysqli_query($connect, $sql);
		if($result){
			echo "<script>alert('Thêm mới sản phẩm thành công') </script>";
			echo "<script> window.location.href = 'index.php' </script>";
			}
		else{
			echo "<script>alert('Thêm mới lỗi') </script";
		}

		}
		?>

</body>
</html>