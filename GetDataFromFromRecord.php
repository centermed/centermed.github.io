
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
	$form_Zapic_date = $_POST['date'];
	$form_Zapic_time = $_POST['time'];
	$num_vrach = $_POST['Vrach_nom'];
	$Usluga = $_POST['Usluga'];
	$direction = $_POST['direction'];
	
   $query = "INSERT INTO `zapis`(`Familia`, `Imya`, `Otchestvo`, `Telefon`, `Napravlenie`, `Usluga`, `Vrach`, `Data`, `Vremya` ,`Adress_Kliniki` ) VALUES ('$form_Zapic_familyname', '$form_Zapic_name', '$form_Zapic_secondname', '$form_Zapic_number','$direction','$Usluga','$num_vrach','$form_Zapic_date','$form_Zapic_time', 'Адрес')";
	
	
	$result_bd = mysqli_query($link, $query);
	if($result_bd)
	{
		echo "Запись успешно отправлена!<br>";
	}
	else{
		
		echo "Запись не была отправлена!<br>";
	}
	
	}
	
	?>

