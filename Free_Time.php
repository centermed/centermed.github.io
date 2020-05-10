<?PHP 
$hostname = "localhost";
$login = "id13589731_centermed";
$password = "e#EHG(YqO(X)Uy8jTSYy";
$link = mysqli_connect($hostname,$login, $password);
if($link)
{
	echo "Пользователь $login подключен";?> <br><?PHP
}
else
	
{
	echo "Пользователь $login не подключен!";?> <br><?PHP
}

$dbname = "id13589731_basepd";
if(mysqli_select_db($link,$dbname))
{
	echo "База $dbname подключена";?> <br><?PHP
}
	else
		
{
	echo "База $dbname не подключена или уже была подключена";?> <br><?PHP
}


$query = "SELECT COUNT(*) FROM vrachi";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);

$countids = $arrayOfids[0];
$k=0;
for($i=0; $i<$countids; $i++){

	$q = "SELECT RabTime,RabDni,id FROM vrachi WHERE id='$i'";
	$res = mysqli_query($link,$q);
	$mass_vrach = mysqli_fetch_array($res);
	$arrayOfRabTime =explode(';',$mass_vrach['RabTime']);
	$arrayOfRabDni = explode(';',$mass_vrach['RabDni']);
	$idvracha = $mass_vrach['id'];

	$koliddata = count($arrayOfRabDni);
    $keys = 0;
	for($p=0; $p<$koliddata-1; $p++){
	$data = $arrayOfRabDni[$p];
	$keys = $p;
    $qu = "INSERT INTO `svobodnoevremya` (`id`, `idvrach`,`iddata`,`Data`,`vrem1`, `vrem2`, `vrem3`, `vrem4`, `vrem5`, `vrem6`, `vrem7`, `vrem8`, `vrem9`, `vrem10`, `vrem11`, `vrem12`, `vrem13`, `vrem14`, `vrem15`, `vrem16`, `vrem17`, `vrem18`, `vrem19`, `vrem20`, `vrem21`, `vrem22`, `vrem23`, `vrem24`, `vrem25`, `vrem26`, `vrem27`, `vrem28`, `vrem29`, `vrem30`, `vrem31`, `vrem32`) VALUES ('$k','$idvracha','$data','$data','$arrayOfRabTime[0]','$arrayOfRabTime[1]','$arrayOfRabTime[2]','$arrayOfRabTime[3]','$arrayOfRabTime[4]','$arrayOfRabTime[5]','$arrayOfRabTime[6]','$arrayOfRabTime[7]','$arrayOfRabTime[8]','$arrayOfRabTime[9]','$arrayOfRabTime[10]','$arrayOfRabTime[11]','$arrayOfRabTime[12]','$arrayOfRabTime[13]','$arrayOfRabTime[14]','$arrayOfRabTime[15]','$arrayOfRabTime[16]','$arrayOfRabTime[17]','$arrayOfRabTime[18]','$arrayOfRabTime[19]','$arrayOfRabTime[20]','$arrayOfRabTime[21]','$arrayOfRabTime[22]','$arrayOfRabTime[23]','$arrayOfRabTime[24]','$arrayOfRabTime[25]','$arrayOfRabTime[26]','$arrayOfRabTime[27]','$arrayOfRabTime[28]','$arrayOfRabTime[29]','$arrayOfRabTime[30]','$arrayOfRabTime[31]')";
	$result = mysqli_query($link,$qu);
	if($result)
	{
		echo "успешно <br>";
	}
	else
	{
		echo "провал <br>";
	}
	$k++;
	}
	$key=0;
}

?>