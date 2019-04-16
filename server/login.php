<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<?php

		//获取当前的user 和 password 
		$name = $_GET['user'];
		$password = $_GET['password'];
		//1.连接数据库
		  $host = "localhost";
		  $user = "root";
		  $pwd = "";
		  $db = "nvtek";
		  $conID = mysqli_connect($host,$user,$pwd,$db);
		  //连接数据库错误提示
			if (mysqli_connect_errno($conID)) { 
    			die("连接 MySQL 失败: " . mysqli_connect_error()); 
			}
		 mysqli_query($conID,"set names utf8"); //数据库编码格式
		// mysqli_set_charset($conID,"utf8");//设置默认客户端字符集。
		// mysqli_select_db($conID,$mysql_database); //更改连接的默认数据库

		//查询代码
			$sql = "select * from customer";
			$query = mysqli_query($conID,$sql);
			while($row = mysqli_fetch_array($query)){
    			echo $row['user'].'<br>';
    			echo $row['password'].'<br>';
    		    if(!strcmp($row['user'],$name)){
    		    	echo "you are my cusomer".'<br>';
    		    	//header('content-type:text/html;charset=uft-8');
    		    	header("Location:main.php");
    		    	break;
    		    }
			}
		//查询代码

		// 释放结果集+关闭MySQL数据库连接
		mysqli_free_result($query);
		mysqli_close($conID); 
	 ?>
</body>
</html>