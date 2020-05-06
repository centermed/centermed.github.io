<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
	<?PHP 
	$host_name="localhost";
	$user = "id13589731_centermed";
	$password = "e#EHG(YqO(X)Uy8jTSYy";
	
	
	$query= "GRANT ALL PRIVILEGES ON *.* TO 'id13589731_centermed'@'localhost' IDENTIFIED BY 'e#EHG(YqO(X)Uy8jTSYy' WITH GRANT OPTION";
	
	if(mysqli_query($link,$query))
	{
		echo "Пользоматель $user создан <br>";
	}
	else
	{
		echo "Пользоматель не $user создан <br>";
	}
	
	$linknewuser = mysqli_connect($host_name,$user,$password);
	
	if($linknewuser)
	{
		echo "Пользователь $user подключен <br>";

	}
	else
	{ 
	    echo "Пользователь $user не подключен <br>";	
	}
	
	?>
</body>
</html>