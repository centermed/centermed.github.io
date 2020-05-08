
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" href="media/logo.svg" type="image/png">

    <title>Онлайн-запись</title>
  </head>
  <body>
     <script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class = "hier container-fluid">
      <div class = "row">
        <div class = "logo col-2 offset-1">
          <b><a href="index.html">ЦЕНТРМЕД</a></b></div>
        <div class = "call col-4 offset-1" align="center">
          <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
            <img src = "media/icon.png" width="16px">
            Заказать обратный звонок</a>
        </div>
        <div class = "col-2 offset-1">
          <a href="record.html">
          <button class = 'record' href = "record.html"><b>Онлайн-запись</b></button>
        </div>
      </div>
      <div class = "row">
        <div class = "col-2 offset-1" align="center">
          <a href="clinic.html"><b>Клиника</b></a>
        </div>
        <div class = "col-2" align="center">
          <a href="services.html"><b>Услуги</b></a>
        </div>
        <div class = "col-2" align="center">
          <a href="prices.html"><b>Цены</b></a>
          </div>
        <!--<div class = "col-2" align="center">
          <a href="doctors.html"><b>Врачи</b></a>
        </div>-->
        <div class = "col-2" align="center">
          <a href="contacts.html"><b>Контакты</b></a>
        </div>
        <div class = "col-2" align="center">
          <a href="to_patients.html"><b>Пациентам</b></a>
          </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2Title" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Заказать обратный звонок</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="name">ФИО</label>
                <input type="text" class="form-control" id="name" placeholder="Иванов Иван Иванович">
              </div>
              <div class="form-group">
                <label for="number">Номер телефона</label>
                <input type="phone" class="form-control" id="number" placeholder="+7(922)1212120">
              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#name" data-dismiss="modal">Отправить</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class = "hier-record after-menu container">
      <div class = "row">
        <div class = "col-1">
          <img src = "media/location.png">
        </div>
        <div class = "col-3">
          <b>Вызов врача на дом</b>
          <p>Выберите врача и укажите адрес</p>
        </div>
        
        <div class = "col-1">
          <img src = "media/money.png">
        </div>
        <div class = "col-3">
          <b>Честная цена без комиссии</b>
          <p>Цена приема будет как в 
          клинике или ниже, оплата 
          производится на месте</p>
        </div>
        
        <div class = "col-1">
          <img src = "media/doctor.png">
        </div>
        <div class = "col-3">
          <b>Моментальная онлайн-запись к врачу</b>
          <p>Без звонка в клинику с 
          помощью актуального 
          расписания</p>
        </div>
        
      </div>
    </div>

    <div class = "container">
      <div class = "row">
        <div class = "col-8 offset-2" align="center">
          <h2><b>Запишитесь на прием к врачу онлайн</b></h2>
        </div>
        <div align="center" class = "col-6 offset-3">
          <input type="search" value = "Врач,услуга" class = "search col-9">
          </input>
          <button class = "button-search col-2">
            Найти
          </button>
        </div>
      </div>
    </div>
  
   

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


for($i=0; $i<$countids; $i++){
$query = "SELECT * FROM `vrachi` WHERE id = $i";

$res_ids = mysqli_query($link, $query);

$arrayOfids = mysqli_fetch_array($res_ids);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" href="media/logo.svg" type="image/png">
<div class = "container">
      <div class = "row">
        <div class = "doctor col-10 offset-1" align="center">
          <div class = "container-fluid">
            <div class = "row">
              <div class = "photo col-2">
            
              
                <img src = "https://www.thiswaifudoesnotexist.net/example-20134.jpg";">
              </div>
              <div class = "text-doctor col-5" align = left>
              <?PHP $key = $arrayOfids['Special'];
                $query = "SELECT specialization FROM specializations WHERE id = $key";
                $res = mysqli_query($link, $query);
                $array = mysqli_fetch_array($res); ?>
              
                <p id="speciality" value="Терапевт"><?PHP echo $array['specialization']; ?></p>
                
                <h2><b id="nameofdoctor"><?PHP echo $arrayOfids['Familia']; echo " "; echo $arrayOfids['Imya']; echo " "; echo $arrayOfids['Otch']; ?> </b></h2>
                <p>Стаж <?PHP  echo $arrayOfids['Stag']; ?> лет</p>
                <p><?PHP echo $arrayOfids['Relagii']; ?></p>
                <h2><b>2100 &#8381</b></h2>
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


<?PHP
}
?>


    
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Запустить модальное окно
    </button>-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Онлайн-запись</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              
            <form name = "Zapis" action = "GetDataFromFromRecord.php" method = "POST">
              <div class="form-group">
                <label for="familyname">Фамилия</label>
                <input type="text" class="form-control" name="familyname" placeholder="Иванов">
              </div>
              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" name="name" placeholder="Иван">
              </div>
              <div class="form-group">
                <label for="secondname">Отчество</label>
                <input type="text" class="form-control" name="secondname" placeholder="Иванович">
              </div>
              <div class="form-group">
                <label for="number">Номер телефона</label>
                <input type="text" class="form-control" name="number" placeholder="+7(922)-984-33-17">
              </div>
              <div class="form-group">
                <label for="information">Полноая информация по записи</label>
                <div class= "row">
                  <div class="col">
                    <select name = "direction">
				
       <?PHP 
       $query = "SELECT COUNT(*) FROM specializations";

       $res_ids = mysqli_query($link, $query);
       
       $arrayOfids = mysqli_fetch_array($res_ids);
       
       $countids = $arrayOfids[0];
       
       
       for($i=0; $i<$countids; $i++){
       $query = "SELECT id, specialization FROM specializations WHERE id = '$i'";
       
       $res = mysqli_query($link, $query);
       
       $arrayOfids = mysqli_fetch_array($res);
       
       ?>
  			 <option name = "spec" value="<?PHP echo $arrayOfids['id']; ?>" > <?PHP echo $arrayOfids['specialization']; ?></option>	<?PHP } ?>		
			</select>
			
                  </div>
                  <div class="col">
                      <select name = "Usluga">
                      <?PHP 
       $query = "SELECT COUNT(*) FROM services";

       $res_ids = mysqli_query($link, $query);
       
       $arrayOfids = mysqli_fetch_array($res_ids);
       
       

       for($i=0; $i<$countids; $i++){
       $query = "SELECT id, service FROM services WHERE id = '$i'";
       
       $res = mysqli_query($link, $query);
       
       $arrayOfids = mysqli_fetch_array($res);
       
       ?>
  			 <option value="<?PHP echo $arrayOfids['id']; ?>" > <?PHP echo $arrayOfids['service']; ?></option>	<?PHP } ?>			
			</select>
                  </div>
                </div>
                  <select name = "Vrach_nom" >
				
                  <?PHP 
       $query = "SELECT COUNT(*) FROM vrachi";

       $res_ids = mysqli_query($link, $query);
       
       $arrayOfids = mysqli_fetch_array($res_ids);
       
       

       for($i=0; $i<$countids; $i++){
       $query = "SELECT id,Familia,Imya,Otch FROM vrachi WHERE id = $i";
       
       $res = mysqli_query($link, $query);
       
       $arrayOfids = mysqli_fetch_array($res);
       $str_Name = $arrayOfids['Familia']." ".$arrayOfids['Imya']." ".$arrayOfids['Otch'];?>
  			 <option value="<?PHP echo $arrayOfids['id']; ?>" > <?PHP echo $str_Name; ?></option>	<?PHP } ?>		
			</select>
              </div>
              <div class="form-group">
                <label for="datetime">Время приема</label>
                <div class= "row">
                  <div class="col">
                    <input type="text" class="form-control" name="date" placeholder="13.05.2020">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" name="time" placeholder="16:30-17:30">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" name="price" placeholder="2100 &#8381" readonly>
              </div>
				<input name = "submit" type="submit" value = "Отправить"class="btn btn-primary">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#name" data-dismiss="modal">Отправить</button>
          </div>
        </div>
      </div>
    </div>

    <footer class = "container">
      <div class = "row">
        <div class = "sosials col-3 offset-1" align = left>
         <img onclick="img_click()" onmouseenter="img_enter()" onmouseleave="img_leave()" id="logomed" src = 'media/cmg.svg' width="70%" class = 'logobot'>
          <div class = "icon">
            <a href="#">
              <img src = "media/vk.png" width="20%">
            </a>
            <a href="#">
              <img src = "media/google.png" width="20%">
            </a>
            <a href="#">
              <img src = "media/facebook.png" width="20%">
            </a>
          </div>
        </div>
        <div class = "col-2">
          <ul>
            <li><a href="to_patients.html"><b>Пациентам</b></a></li>
            <li><a href="questions.html">Вопросы и ответы</a></li>
            <li><a href="diseases.html">Заболевания</a></li>
            <li><a href="directory.html">Справочник пациента</a></li>
          </ul>
        </div>
        <div class = "col-2">
          <ul>
            <li><a href="clinic.html"><b>Клиника</b></a></li>
            <li><a href="news.html">Новости</a></li>
            <li><a href="stocks.html">Акции</a></li>
            <li><a href="prices.html">Цены</a></li>
          </ul>
        </div>
        <div class = "col-3">
          <ul>
            <li><a href="contacts.html"><b>Контакты</b></a></li>
            <li>Москва, м. ВДНХ, 
            ул. Бориса Галушкина, 3</li>
            <li>8 (495) 191-29-60</li>
            <li>hello@cm.ru</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
