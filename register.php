<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body
		{
			text-align: center;
			Background: skyblue;
			Text Color: black;
			font-size: 25px;
		}form
		{
			margin-top: 200px;
			width: 350px;
			background: yellow;
			height: 220px;
			padding-top: 80px;
			padding-left: 50px;
			margin-left: 580px;
			border-radius: 25px;
			background-image: url(https://elead.com.vn/wp-content/uploads/2020/04/anh-dep-hoa-huong-duong-va-mat-troi_022805970-1-1181x800-6.jpg);
		}
	</style>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>User ID</td>
				<td><input type="text" name="user_id"></td>
			</tr>
			<tr>
				<td>UserName</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register" value="Register"></td>
			</tr>
			<?php
			$connect = mysqli_connect('localhost','root','','online_shopping_website');
			if($connect){
			echo "Kết nối thành công";
			}
			else{
			echo "Kết nối thất bại";
			}
			if(isset($_POST['register'])){
			$user_id = $_POST['user_id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "INSERT INTO user VALUES('$user_id','$username','$password')";
			$result = mysqli_query($connect,$sql);
			if($result){
			echo "Đã thêm tài khoản thành công";
			}
			else{
			echo"Thất bại";
			}
			}
			?>
		</table>
	</form>
</body>
</html>