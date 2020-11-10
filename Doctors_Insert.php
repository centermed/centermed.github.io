<?PHP 

$hostname="sql108.qlihost.ru";
	$login = "qlih_25866655";
	$password = "W4sChjNvUVWiAdm";
	$basename = "qlih_25866655_id13589731_basepd";


$link = mysqli_connect($hostname,$login,$password);

if($link)
{
    echo "Пользователь $login подключен";
}
else
{
    echo "Пользователь $login не подключен";
}
$select = mysqli_select_db($link,$basename);
if($select)
{
    echo "База $basename подключена";
}
else
{
    echo "База $basename не подключена";
}

$query = "SELECT id FROM `vrachi`";

$res_ids = mysqli_query($link, $basename);

$arrayOfids = mysqli_fetch_array($res);

foreach($arrayOfids as id)
{
echo $id;
}
for($i=0; $i<4; $i++){

echo<<<html
<br>

<div class = "container">
      <div class = "row">
        <div class = "doctor col-10 offset-1" align="center">
          <div class = "container-fluid">
            <div class = "row">
              <div class = "photo col-2">
                <img src = "media/photo.png">
              </div>
              <div class = "text-doctor col-5" align = left>
                <p id="speciality" value="Терапевт">терапевт</p>
                <h2><b id="nameofdoctor">Еременко Валерий Сергеевич</b></h2>
                <p>Стаж 21 год</p>
                <p>к.м.н</p>
                <h2><b>2100 &#8381</b></h2>
                <p class = 'time-ago'><img src = "media/gall.png">Последняя запись к этому врачу была 2 часа назад</p>
              </div>
              <div class = "record-panel col-5">
                <p>Выберите время приема для записи онлайн</p>
                <div class = 'button-panel'>
                  <button id='left' class = 'left' onmouseover="colorchange('left')" onclick="setDate('left')">Среда,11</button>
                  <button id='center' class = 'center' onmouseover="colorchange('center')" onclick="setDate('center')">Четверг,12</button>
                  <button id='right' class = 'right' onmouseover="colorchange('right')" onclick="setDate('right')">Пятница,13</button>
                </div>
                <div class = 'time-panel' onclick=>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('13:00')">13:00</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('13:30')">13:30</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('13:50')">13:50</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('14:10')">14:10</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('14:30')">14:30</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('14:50')">14:50</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('15:10')">15:10</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('15:30')">15:30</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('15:50')">15:50</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('16:10')">16:10</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('16:30')">16:30</button>
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton('16:50')">16:50</button>
                </div>
                <p class = 'number'>Телефон для записи: 8(499)519-37-05</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

html;
}
?>