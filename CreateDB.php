<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>�������� ��� ��������</title>
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
		echo "������������ $user ��������� <br>";
	}
	else
	{
		echo "������������ $user ��  ��������� <br>";
	}
	$query = "CREATE DATABASE $dbname";
	if(mysqli_query($link,$query))
	{
		echo "���� ������ $dbname ������� ������� <br>";
	}
	else
	{
		echo "���� ������ $dbname �� ������� <br>";
	}
	
	?>
</body>
</html>