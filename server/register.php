<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8"/>
</head>
<body>
	<h1 style="text-align:center;">注册</h1>
	<p>
		<form action="main.php" method="post">
			<p>用户名<input type="text" name="user"></p>
			<p>密码<input type="password" name="password"></p>
			<p><input type="submit" value="提交"></p>
		</form>
	</p>
	<?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "nvtek";
		$con = mysqli_connect($host,$user,$password,$db);
		if(!$con){
			die("can not connect the dababase:".$db);
		}else{
			print_r("connect ok.");
		}
		mysqli_query($con,"set names utf8");
		$sql =  "insert into customer values(".$_POST['user'].",".$_POST['password'].");";
		$result = mysqli_query($con,$sql);
		mysqli_free_result($result);
		mysqli_close($con);
	?>
</body>
</html>