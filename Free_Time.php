<?PHP 
$hostname = "localhost";
$login = "admin";
$password = "123";
$link = mysqli_connect($hostname,$login, $password);
if($link)
{
	echo "Пользователь $login подключен";?> <br><?PHP
}
else
	
{
	echo "Пользователь $login не подключен!";?> <br><?PHP
}

$dbname = "basepd";
if(mysqli_select_db($link,$dbname))
{
	echo "База $dbname подключена";?> <br><?PHP
}
	else
		
{
	echo "База $dbname не подключена или уже была подключена";?> <br><?PHP
}


$q = "SELECT id FROM vrachi";
$res = mysqli_query($link,$q);
$id_array = array();
$i=0;
while($ids = mysqli_fetch_array($res))
{
	
	$id_array[$i] = $ids['id'];
	$i++;
}

$kol=count($id_array);
$p=0;
$i=1;
$d=1;

while($p<=$kol+1)
{
	$trig = $id_array[$p];
	
	$q = "SELECT RabTime,RabDni,id FROM vrachi WHERE id='$trig'";
	$res = mysqli_query($link,$q);
	$mass_vrach = mysqli_fetch_array($res);
	
	$arrayOfRabTime =explode(';',$mass_vrach['RabTime']);
	$arrayOfRabDni = explode(';',$mass_vrach['RabDni']);
	$idvracha = $mass_vrach['id'];
	
	  $koliddata = count($arrayOfRabDni);
	
	
			while($i<$koliddata)
			{
				
				$data = $arrayOfRabDni[$i-1];
				$qu = "INSERT INTO `svobodnoevremya` (`id`, `idvrach`,`iddata`,`Data`,`vrem1`, `vrem2`, `vrem3`, `vrem4`, `vrem5`, `vrem6`, `vrem7`, `vrem8`, `vrem9`, `vrem10`, `vrem12`, `vrem13`, `vrem14`, `vrem15`, `vrem16`, `vrem17`, `vrem18`, `vrem19`, `vrem20`, `vrem21`, `vrem22`, `vrem23`, `vrem24`, `vrem25`, `vrem26`, `vrem27`, `vrem28`, `vrem29`, `vrem30`, `vrem31`, `vrem32`) VALUES ('$d','$idvracha','$i','$data','$arrayOfRabTime[0]','$arrayOfRabTime[1]','$arrayOfRabTime[2]','$arrayOfRabTime[3]','$arrayOfRabTime[4]','$arrayOfRabTime[5]','$arrayOfRabTime[6]','$arrayOfRabTime[7]','$arrayOfRabTime[8]','$arrayOfRabTime[9]','$arrayOfRabTime[10]','$arrayOfRabTime[11]','$arrayOfRabTime[12]','$arrayOfRabTime[13]','$arrayOfRabTime[14]','$arrayOfRabTime[15]','$arrayOfRabTime[16]','$arrayOfRabTime[17]','$arrayOfRabTime[18]','$arrayOfRabTime[19]','$arrayOfRabTime[20]','$arrayOfRabTime[21]','$arrayOfRabTime[22]','$arrayOfRabTime[23]','$arrayOfRabTime[24]','$arrayOfRabTime[25]','$arrayOfRabTime[26]','$arrayOfRabTime[27]','$arrayOfRabTime[28]','$arrayOfRabTime[29]','$arrayOfRabTime[30]')";
				
				

				$result = mysqli_query($link,$qu);
					$i++;
					$d++;
				
			}	
	
	$i=1;
	
	
$p++;
}



?>