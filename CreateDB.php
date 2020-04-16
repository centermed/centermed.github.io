<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Документ без названия</title>
</head>

<body>
	<?PHP
	
	$host_name="localhost";
	$user = "admin";
	$password = "123";
	$dbname = "databasepd";
	$link = mysqli_connect($host_name,$user,$password);
	if($link)
	{
		echo "Пользователь $user подключен <br>";
	}
	else
	{
		echo "Пользователь $user не  подключен <br>";
	}
	$query = "CREATE DATABASE $dbname";
	if(mysqli_query($link,$query))
	{
		echo "База данных $dbname успешно создана <br>";
	}
	else
	{
		echo "База данных $dbname не создана <br>";
	}
	
	?>
</body>
</html>