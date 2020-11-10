<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
	<?PHP 
	$host_name="sql108.qlihost.ru";
	$user = "qlih_25866655";
	$password = "W4sChjNvUVWiAdm";
	
	
	$query= "GRANT ALL PRIVILEGES ON *.* TO 'qlih_25866655'@'sql108.qlihost.ru' IDENTIFIED BY 'W4sChjNvUVWiAdm' WITH GRANT OPTION";
	
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