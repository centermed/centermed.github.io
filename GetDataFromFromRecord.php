
<?PHP 
	$host_name="localhost";
	$user = "id13589731_centermed";
	$password = "e#EHG(YqO(X)Uy8jTSYy";
	
	if($link = mysqli_connect($host_name,$user, $password))
	{
		echo "Пользователь $user подключен <br>";
		
	}
	else
	{
		echo "Пользователь $user не подключен <br>";
	}
	if(mysqli_select_db($link,"id13589731_basepd"))
	{
		echo "База выбрана! <br>";
		
	}
	else
	{
		echo "База не выбрана или была уже выбрана ранее!<br>";
	}
	
    $res = $_POST['submit'];
	
	if($res){
	$form_Zapic_familyname = $_POST['familyname'];
	$form_Zapic_name = $_POST['name'];
	$form_Zapic_secondname = $_POST['secondname'];
	$form_Zapic_number = $_POST['number'];
	$form_Zapic_date = $_POST['Date_Priema'];
	$form_Zapic_time = $_POST['Time_Priema'];
	$Usluga = $_POST['Usluga'];
	
   $query = "INSERT INTO `zapis`(`Familia`, `Imya`, `Otchestvo`,
    `Telefon`, `Napravlenie`, `Usluga`, `Vrach`, `Data`, `Vremya`) VALUES ('$form_Zapic_familyname', '$form_Zapic_name', 
	'$form_Zapic_secondname', '$form_Zapic_number','0','$Usluga',
	'0','$form_Zapic_date','$form_Zapic_time')";
	
	 

	$result_bd = mysqli_query($link, $query);
	if($result_bd)
	{
		echo "Запись успешно отправлена!<br>";
	}
	else{
		
		echo "Запись не была отправлена!<br>";
	}
	
	}
	
   
	$query = "SELECT `vrem1`, `vrem2`, `vrem3`, `vrem4`, `vrem5`, 
	`vrem6`, `vrem7`, `vrem8`, `vrem9`, `vrem10`, `vrem11`, 
	`vrem12`, `vrem13`, `vrem14`, `vrem15`, `vrem16`, `vrem17`,
	 `vrem18`, `vrem19`, `vrem20`, `vrem21`, `vrem22`, `vrem23`, 
	 `vrem24`, `vrem25`, `vrem26`, `vrem27`, `vrem28`, `vrem29`, 
	 `vrem30`, `vrem31`, `vrem32` FROM `svobodnoevremya` WHERE Data = '$form_Zapic_date'";
	
	$result_bd = mysqli_query($link, $query);
    $ArraOfTime = mysqli_fetch_array($result_bd);
	for($i=0;$i<32;$i++)
	{
	  if($ArraOfTime[$i] == $form_Zapic_time)
	  {
		  $ArraOfTime[$i] = "id_zapis";
	  }
	}
	

	$query = "UPDATE `svobodnoevremya` SET 
	`Data`='id_zapis',
	`vrem1`='$ArraOfTime[0]',
	`vrem2`='$ArraOfTime[1]',
	`vrem3`='$ArraOfTime[2]',
	`vrem4`='$ArraOfTime[3]',
	`vrem5`='$ArraOfTime[4]',
	`vrem6`='$ArraOfTime[5]',
	`vrem7`='$ArraOfTime[6]',
	`vrem8`='$ArraOfTime[7]',
	`vrem9`='$ArraOfTime[8]',
	`vrem10`='$ArraOfTime[9]',
	`vrem11`='$ArraOfTime[10]',
	`vrem12`='$ArraOfTime[11]',
	`vrem13`='$ArraOfTime[12]',
	`vrem14`='$ArraOfTime[13]',
	`vrem15`='$ArraOfTime[14]',
	`vrem16`='$ArraOfTime[15]',
	`vrem17`='$ArraOfTime[16]',
	`vrem18`='$ArraOfTime[17]',
	`vrem19`='$ArraOfTime[18]',
	`vrem20`='$ArraOfTime[19]',
	`vrem21`='$ArraOfTime[20]',
	`vrem22`='$ArraOfTime[21]',
	`vrem23`='$ArraOfTime[22]',
	`vrem24`='$ArraOfTime[23]',
	`vrem25`='$ArraOfTime[24]',
	`vrem26`='$ArraOfTime[25]',
	`vrem27`='$ArraOfTime[26]',
	`vrem28`='$ArraOfTime[27]',
	`vrem29`='$ArraOfTime[28]',
	`vrem30`='$ArraOfTime[29]',
	`vrem31`='$ArraOfTime[30]',
	`vrem32`='$ArraOfTime[31]'";
	

	$result_bd = mysqli_query($link, $query);
	if($result_bd)
	{
		echo "Время успешно в свободном!<br>";
	}
	else{
		
		echo "Время не в свободном!<br>";
	}


	?>

