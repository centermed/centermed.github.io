<?PHP
	
	$host_name="sql108.qlihost.ru";
	$user = "qlih_25866655";
	$password = "W4sChjNvUVWiAdm";
	$dbname = "qlih_25866655_id13589731_basepd";

	$link = mysqli_connect($host_name,$user,$password);
	if($link)
	{
		echo "Пользователь $user создан <br>";
	}
	else
	{
		echo "Пользователь $user не создан <br>";
	}
	$query = "CREATE DATABASE $dbname";
	if(mysqli_query($link,$query))
	{
		echo "База $dbname создана <br>";
	}
	else
	{
		echo "База $dbname не создана или была уже создана ранее <br>";
	}
	
	?>
