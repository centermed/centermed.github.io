<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>�������� ��� ��������</title>
</head>

<body>
	<?PHP 
	$link=mysqli_connect("localhost","root","");
	$host_name="localhost";
	$user = "admin";
	$password = "123";
	
	if($link)
	{
		echo "������������ root �������� <br>";

	}
	else
	{ 
	    echo "������������ root �� �������� <br>";	
	}
	
	$query= "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY '123' WITH GRANT OPTION";
	
	if(mysqli_query($link,$query))
	{
		echo "������������ ������ <br>";
	}
	else
	{
		echo "������������ �� ������ <br>";
	}
	
	
	
	$linknewuser = mysqli_connect($host_name,$user,$password);
	
	if($linknewuser)
	{
		echo "������������ $user ������ <br>";

	}
	else
	{ 
	    echo "������������ $user �� ������ <br>";	
	}
	
	?>
</body>
</html>