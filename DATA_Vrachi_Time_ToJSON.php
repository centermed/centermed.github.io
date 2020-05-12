<?PHP

$hostname = "localhost";
$login = "id13589731_centermed";
$password = "e#EHG(YqO(X)Uy8jTSYy";
$link = mysqli_connect($hostname,$login,$password);
$basename = "id13589731_basepd";
$select = mysqli_select_db($link,$basename);

$query = "SELECT COUNT(*) FROM svobodnoevremya";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);

$countids = $arrayOfids[0];


for($i=0; $i<$countids; $i++){
$query = "SELECT * FROM `svobodnoevremya` WHERE id = $i";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);

for($p=1; $p<33; $p++){
 $index = 'vrem'.$p;
if(empty($arrayOfids[$index]))
{
    $arrayOfids[$index] = "0";
}
 
}

$id_vrach = $arrayOfids['idvrach'];
$Date = $arrayOfids['Data'];
$Time1 = $arrayOfids['vrem1'];
$Time2 = $arrayOfids['vrem2'];
$Time3 = $arrayOfids['vrem3'];
$Time4 = $arrayOfids['vrem4'];
$Time5 = $arrayOfids['vrem5'];
$Time6 = $arrayOfids['vrem6'];
$Time7 = $arrayOfids['vrem7'];
$Time8 = $arrayOfids['vrem8'];
$Time9 = $arrayOfids['vrem9'];
$Time10 = $arrayOfids['vrem10'];
$Time11 = $arrayOfids['vrem11'];
$Time12 = $arrayOfids['vrem12'];
$Time13 = $arrayOfids['vrem13'];
$Time14 = $arrayOfids['vrem14'];
$Time15 = $arrayOfids['vrem15'];
$Time16 = $arrayOfids['vrem16'];
$Time17 = $arrayOfids['vrem17'];
$Time18 = $arrayOfids['vrem18'];
$Time19 = $arrayOfids['vrem19'];
$Time20 = $arrayOfids['vrem20'];
$Time21 = $arrayOfids['vrem21'];
$Time22 = $arrayOfids['vrem22'];
$Time23 = $arrayOfids['vrem23'];
$Time24 = $arrayOfids['vrem24'];
$Time25 = $arrayOfids['vrem25'];
$Time26 = $arrayOfids['vrem26'];
$Time27 = $arrayOfids['vrem27'];
$Time28 = $arrayOfids['vrem28'];
$Time29 = $arrayOfids['vrem29'];
$Time30 = $arrayOfids['vrem30'];
$Time31 = $arrayOfids['vrem31'];
$Time32 = $arrayOfids['vrem32'];



$masOfTime[$i] = array(id_Врача => $id_vrach, Дата => $Date, Время1 => $Time1,
Время2 => $Time2,Время3 => $Time3,Время4 => $Time5,Время6 => $Time6,
Время7 => $Time7,Время8 => $Time8,Время9 => $Time9,Время10 => $Time10,
Время11 => $Time11,Время12 => $Time12,Время13 => $Time13,Время14 => $Time14,
Время15 => $Time15,Время16 => $Time16,Время17 => $Time17,Время18 => $Time18,
Время19 => $Time19,Время20 => $Time20,Время21 => $Time21,Время22 => $Time22,
Время23 => $Time23,Время24 => $Time24,Время25 => $Time25,Время26 => $Time26,
Время27 => $Time27,Время28 => $Time28,Время29 => $Time29,Время30 => $Time30,
Время31 => $Time1,Время31 => $Time31,Время32 => $Time32);
if($i==0){
$str = $str."data_time_svobod"."= "; 
$str = $str."'".implode('^', $masOfTime[$i])."'".";"."\n";
}
else
{
   $str = $str."data_time_svobod"."+= "; 
$str = $str."'".implode('^', $masOfTime[$i])."'".";"."\n"; 
}

}


$fd = fopen("Data_Vrachi_Time.txt", 'w') or die("не удалось создать файл");
fwrite($fd, $str);
fclose($fd);

  

  
?>