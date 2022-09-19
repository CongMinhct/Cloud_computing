<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body
		{
			text-align: center;
			Background: #40e4ed;
			Text Color: #000000;
			font-size: 25px;
		}
		form
		{
			margin-top: 200px;
			width: 350px;
			background: #ebf20c;
			height: 300px;
			padding-top: 20px;
			margin-left: 580px;
			border-radius: 25px;
			background-image: url(https://i0.wp.com/s3.anhdep24.net/images/2018/02/25/573c7a4046e35.jpg);
		}
</style>
</head>
<body>
	<?php 
	$connect = mysqli_connect('localhost','root','','online_shopping_website');
	if($connect){
	echo "Kết nối thành công";
	}
	else{
	echo "Kết nối thất bại";
	}
	?>


	<form action="" method="post">
		<h1> Login </h1>
	UserName:<input type="text" name ="username" required placeholder="Username"> <br>
	Password:<input type="password" name ="password" required placeholder="Password"> <br>
	<input type="submit" name="login" value="login">
	</form>


	<?php 
	if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password =$_POST['password'];

	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($connect,$sql);
	$num_rows = mysqli_num_rows($result);
	if($num_rows==0){
	echo "Username or password is incorrect";
	}
	else
	{
		
		?>
			<script>
				alert("Login success");
				window.location.href = "webbanhang.html";
			</script>
		<?php
				
	}
	}
	?>
</body>
</html>