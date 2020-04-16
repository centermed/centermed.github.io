<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Документ без названия</title>
</head>

<body>
	<?PHP 
	$link=mysqli_connect("localhost","root","");
	$host_name="localhost";
	$user = "admin";
	$password = "123";
	
	if($link)
	{
		echo "Пользователь root создался <br>";

	}
	else
	{ 
	    echo "Пользователь root не создался <br>";	
	}
	
	$query= "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY '123' WITH GRANT OPTION";
	
	if(mysqli_query($link,$query))
	{
		echo "Пользователь создан <br>";
	}
	else
	{
		echo "Пользователь не создан <br>";
	}
	
	
	
	$linknewuser = mysqli_connect($host_name,$user,$password);
	
	if($linknewuser)
	{
		echo "Пользователь $user выбран <br>";

	}
	else
	{ 
	    echo "Пользователь $user не выбран <br>";	
	}
	
	?>
</body>
</html>