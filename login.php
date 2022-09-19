<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		<input type="text" name="User name" required placeholder="User name">
		<input type="password" name="password" required placeholder="password">
		<input type="submit" name="submit" value="login">
	</form>
</body>
</html>