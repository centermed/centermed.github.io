<?PHP 
	
	
	$hostname="sql108.qlihost.ru";
	$login = "qlih_25866655";
	$password = "W4sChjNvUVWiAdm";
	$basename = "qlih_25866655_id13589731_basepd";

	$link = mysqli_connect($host_name,$user, $password);

	mysqli_select_db($link,"qlih_25866655_id13589731_basepd");

	
    $res = $_POST['submit'];
	
	if($res){
	$form_Zapic_familyname = $_POST['familyname'];
	$form_Zapic_name = $_POST['name'];
	$form_Zapic_secondname = $_POST['secondname'];
	$form_Zapic_number = $_POST['number'];
	$form_Zapic_date = $_POST['Date_Priema'];
	$form_Zapic_time = $_POST['Time_Priema'];
	$Usluga = $_POST['Usluga'];
	$Vrach = $_POST['id_vrach'];
	$Napravlenie = $_POST['direction'];
	$id_vrach = $_POST['doctors_id'];
	
	$query = "SELECT id FROM `services` WHERE service = '$Usluga'";
	$result_bd = mysqli_query($link, $query);
	$arra_id_usluga = mysqli_fetch_array($result_bd);
	$id_uslug = $arra_id_usluga['id'];

	$query = "SELECT id FROM `specializations` WHERE specialization = '$Napravlenie'";
	$result_bd = mysqli_query($link, $query);
	$arra_id_spec = mysqli_fetch_array($result_bd);
	$id_spec = $arra_id_spec['id'];
	
	
   $query = "INSERT INTO `zapis`(`Familia`, `Imya`, `Otchestvo`,
    `Telefon`, `Napravlenie`, `Usluga`, `Vrach`, `Data`, `Vremya`) VALUES ('$form_Zapic_familyname', '$form_Zapic_name', 
	'$form_Zapic_secondname', '$form_Zapic_number','$id_spec','$id_uslug',
	'$id_vrach','$form_Zapic_date','$form_Zapic_time')";
	
	 

	$result_bd = mysqli_query($link, $query);

	
	}
	
   
	$query = "SELECT `vrem1`, `vrem2`, `vrem3`, `vrem4`, `vrem5`, 
	`vrem6`, `vrem7`, `vrem8`, `vrem9`, `vrem10`, `vrem11`, 
	`vrem12`, `vrem13`, `vrem14`, `vrem15`, `vrem16`, `vrem17`,
	 `vrem18`, `vrem19`, `vrem20`, `vrem21`, `vrem22`, `vrem23`, 
	 `vrem24`, `vrem25`, `vrem26`, `vrem27`, `vrem28`, `vrem29`, 
	 `vrem30`, `vrem31`, `vrem32` FROM `svobodnoevremya` WHERE Data = '$form_Zapic_date' AND idvrach = '$id_vrach'";
	
	$result_bd = mysqli_query($link, $query);
	$ArraOfTime = mysqli_fetch_array($result_bd);
	
   
    
	$query = "SELECT id FROM zapis ORDER BY id DESC LIMIT 1";
	$result_MAX = mysqli_query($link, $query);
	$Max_ID_arr = mysqli_fetch_array($result_MAX);
	$MAX_ID = $Max_ID_arr['id'];
   
    
    
	for($l=0;$l<32;$l++)
	{
	
	 if($ArraOfTime[$l]==$form_Zapic_time){
		 $ArraOfTime[$l] = $MAX_ID;
	 }
	  
	}



	$query = "UPDATE `svobodnoevremya` SET 
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
	`vrem32`='$ArraOfTime[31]' WHERE Data = '$form_Zapic_date' AND idvrach = '$id_vrach'";
	

	$result_bd = mysqli_query($link, $query);
	
    header("Location: https://centermed.000webhostapp.com/record.html#record-answers")
	
    
	
	?>

