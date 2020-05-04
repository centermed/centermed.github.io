
<?PHP 
	$host_name="localhost";
	$user = "admin";
	$password = "123";
	
	if($link = mysqli_connect($host_name,$user, $password))
	{
		echo "������������ ������ <br>";
		
	}
	else
	{
		echo "������������ �� ������ <br>";
	}
	if(mysqli_select_db($link,"basepd"))
	{
		echo "���� ������� <br>";
		
	}
	else
	{
		echo "���� �� ������� ��� ��� ���� �������<br>";
	}
	
	mysqli_query($link, "SET NAMES cp1251") or exit(mysql_error());

    mysqli_query($link, "SET CHARACTER SET cp1251") or exit(mysql_error());

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
	
	
    $query = "INSERT INTO `zapis`(`Familia`, `Imya`, `Otchestvo`, `Telefon`, `Napravlenie`, `Usluga`, `Vrach`, `Data`, `Vremya`) VALUES ('$form_Zapic_familyname', '$form_Zapic_name', '$form_Zapic_secondname', '$form_Zapic_number','$direction',  '$Usluga','$num_vrach','$form_Zapic_date','$form_Zapic_time')";
	
	
	$result_bd = mysqli_query($link, $query);
	if($result_bd)
	{
		echo "���� ������ �������!<br>";
	}
	else{
		
		echo "���� ������ �� �������!<br>";
	}
	
	}
	
	
	
	
	?>

<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>������</title>
</head>

<body>
			<form name = "Zapis" method = "POST">
              <div class="form-group">
                <label for="familyname">�������</label>
                <input type="text" class="form-control" name="familyname" placeholder="������">
              </div>
              <div class="form-group">
                <label for="name">���</label>
                <input type="text" class="form-control" name="name" placeholder="����">
              </div>
              <div class="form-group">
                <label for="secondname">��������</label>
                <input type="text" class="form-control" name="secondname" placeholder="��������">
              </div>
              <div class="form-group">
                <label for="number">����� ��������</label>
                <input type="text" class="form-control" name="number" placeholder="+7(922)1212120">
              </div>
              <div class="form-group">
                <label for="information">���������� � �����</label>
                <div class= "row">
                  <div class="col">
                    <input type="text" class="form-control" name="direction" placeholder="�������������">
                  </div>
                  <div class="col">
                      <select name = "Usluga">
				
 			 <option value = "1">���������_������ 1</option>
  			 <option value= "2">���������_������ 2</option>
			 <option value="3">���������_������ 3</option>
  			 <option value="4">���������_������ 4</option>			
			</select>
                  </div>
                </div>
                  <select name = "Vrach_nom" >
				
 			 <option value ="1">���� 1</option>
  			 <option value ="2">���� 2</option>
			 <option value ="3">���� 3</option>
  			 <option value ="4">���� 4</option>			
			</select>
              </div>
              <div class="form-group">
                <label for="datetime">���� � ����� ������</label>
                <div class= "row">
                  <div class="col">
                    <input type="text" class="form-control" name="date" placeholder="13.05.2020">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" name="time" placeholder="16:30">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="price">����</label>
                <input type="text" class="form-control" name="price" placeholder="2100 &#8381" readonly>
              </div>
				<input name = "submit" type="submit" value = "��������� "class="btn btn-primary">
            </form>
	<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">�������</button>
		
            
		
          </div>
	
	
</body>
</html>