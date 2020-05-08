<?PHP

$hostname = "localhost";
$login = "id13589731_centermed";
$password = "e#EHG(YqO(X)Uy8jTSYy";
$link = mysqli_connect($hostname,$login,$password);
$basename = "id13589731_basepd";
$select = mysqli_select_db($link,$basename);

$query = "SELECT COUNT(*) FROM vrachi";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);

$countids = $arrayOfids[0];

$file = file_get_contents('DATA.json');
$arrayOfVrach = json_decode($file,TRUE);
 
for($i=0; $i<$countids; $i++){
$query = "SELECT * FROM `vrachi` WHERE id = $i";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);


$key = $arrayOfids['Special'];
$query = "SELECT specialization FROM specializations WHERE id = $key";
$res = mysqli_query($link, $query);
$array = mysqli_fetch_array($res);

$Familia = $arrayOfids['Familia'];
$imyya = $arrayOfids['Imya'];
$Otchestvo = $arrayOfids['Otch'];
$str_name = "$Familia $imyya $Otchestvo";
$Stag = $arrayOfids['Stag'];
$Regalii = $arrayOfids['Relagii'];
$Specializacia = $array['specialization'];


$masOfVrachi[$i] = array(ФИО => $str_name, Стаж => $Stag, Регалия=>$Regalii, Специализация => $Specializacia);

}

                       
var_export(json_encode($masOfVrachi, JSON_UNESCAPED_UNICODE));  // Перекодировать в формат и записать в файл.
  file_put_contents('DATA.json',json_encode($masOfVrachi, JSON_UNESCAPED_UNICODE));
 
?>