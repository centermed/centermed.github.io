<?php
$host_name="sql108.qlihost.ru";
$user = "qlih_25866655";
$password = "W4sChjNvUVWiAdm";

$mysqli = new mysqli($host_name, $user, $password, "qlih_25866655_id13589731_basepd");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$query_spec = "SELECT specialization FROM specializations";

$specializations = mysqli_fetch_fields ( mysqli_query($mysqli, $query_spec));
echo "<table class='services'>";
for($i=0;i < count($specializations); $i++){
    echo "<tr> <td colspan='2' align='center'>" . $specializations[$i] . "</td></tr>";
    $query_serv = "SELECT service, price FROM services WHERE specialization=" . $i;
    $services = mysqli_fetch_fields ( mysqli_query($mysqli, $query_serv));
    for($j=0; $j<count($services);$j++){
        echo "<tr><td>".$services[$j][0]."</td><td>".$services[$j][1]."руб.</td></tr>";
    }
}
echo "</tale>";

