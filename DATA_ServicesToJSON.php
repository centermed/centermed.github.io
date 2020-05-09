<?PHP

$hostname = "localhost";
$login = "id13589731_centermed";
$password = "e#EHG(YqO(X)Uy8jTSYy";
$link = mysqli_connect($hostname,$login,$password);
$basename = "id13589731_basepd";
$select = mysqli_select_db($link,$basename);

$query = "SELECT COUNT(*) FROM services";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);

$countids = $arrayOfids[0];

$file = file_get_contents('DATA_Services.json');
$arrayOfUsluga = json_decode($file,TRUE);
 
for($i=0; $i<$countids; $i++){
$query = "SELECT * FROM `services` WHERE id = $i";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);


$key = $arrayOfids['specialization'];
$query = "SELECT specialization FROM specializations WHERE id = $key";
$res = mysqli_query($link, $query);
$array = mysqli_fetch_array($res);

$Specializacia = $array['specialization'];
$Service = $arrayOfids['service'];
$Price = $arrayOfids['price'];

$masOfUsluga[$i] = array(Направление => $Specializacia, Услуга => $Service, Цена => $Price);

$str = $str.implode( ',', $masOfUsluga[$i]).";";
}
$str = "\n\n data_usluga = "."'".$str."'".";";

$fd = fopen("Data_Services.txt", 'w') or die("не удалось создать файл");
fwrite($fd, $str);
fclose($fd);

  
?>