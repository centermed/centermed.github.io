<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
	<?PHP 
	$link=mysqli_connect("localhost","root","");
	$host_name="localhost";
	$user = "admin";
	$password = "123";
	
	if($link)
	{
		echo "Пользователь root создан <br>";

	}
	else
	{ 
	    echo "Пользователь root не создан <br>";	
	}
	
	$query= "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY '123' WITH GRANT OPTION";
	
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