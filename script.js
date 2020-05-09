   var i=1,count=0,d=0;
  function setimg(a){
    if(a==0 && i==1) i=4;
    else if(a==0 && i>1) i--;
    else if(a==1 && i<4) i++;
    else if(a==1 && i==4) i=1;
    if(i!=2) var s="media/slide"+i+".jpg"
    else var s="media/slide"+i+".png"
    document.getElementById("slide_id").src=s;

  }
 function img_enter(){
 	 document.getElementById("logomed").src='media/cm3.svg';
 }
  function img_leave(){
 	 document.getElementById("logomed").src='media/cmg.svg';
 }
  function img_click(){
  	count++;
  	if(count%2==0) document.getElementById("logomed").src='media/cm2.svg';
  	else document.getElementById("logomed").src='media/cm1.svg';
 }
 function setButton(a){
   document.getElementById("time").placeholder=a;
   document.getElementById("direction").placeholder=document.getElementById("speciality").getAttribute('value');
   document.getElementById("doctor").placeholder=document.getElementById("nameofdoctor").textContent;
}
function setDate(button_id){
  k=1;
  document.getElementById("left").style.color="#707070";
  document.getElementById("left").style.backgroundColor="#F8F8FF";
   document.getElementById("center").style.color="#707070";
  document.getElementById("center").style.backgroundColor="#F8F8FF";
   document.getElementById("right").style.color="#707070";
  document.getElementById("right").style.backgroundColor="#F8F8FF";
	document.getElementById(button_id).style.color="#F8F8FF";
	document.getElementById(button_id).style.backgroundColor="#2D8FD8";
	if(button_id=="left") date=11
	if(button_id=="center") date=12
	if(button_id=="right") date=13
	 document.getElementById("date").placeholder=date+".05.2020"
}
function colorchange(button_id){
  if(k!=1){
  document.getElementById("left").style.color="#707070";
  document.getElementById("left").style.backgroundColor="#F8F8FF";
   document.getElementById("center").style.color="#707070";
  document.getElementById("center").style.backgroundColor="#F8F8FF";
   document.getElementById("right").style.color="#707070";
  document.getElementById("right").style.backgroundColor="#F8F8FF";
  document.getElementById(button_id).style.color="F8F8FF";
  document.getElementById(button_id).style.backgroundColor="#2D8FD8";
}
}
function json(){
  var mydata = JSON.parse(data);
  alert(mydata[0].ФИО);
  alert(mydata[0].Стаж);
    alert(mydata[1].ФИО);
  alert(mydata[1].Стаж);


}
function doctors(){
     /* name="Зубенко Михаил Петрович";
      speciality="Мафиозник";
      work_age="777";
      university="Вор в законе";
      cost="бесценно";
      source="media/photo.png";
      document.write("<p>Salam<p>");
      s='<div class = "container">\
      <div class = "row">\
        <div class = "doctor col-10 offset-1" align="center">\
          <div class = "container-fluid">\
            <div class = "row">\
              <div class = "photo col-2">\
                <img src ='+source+'>\
              </div>\
              <div class = "text-doctor col-5" align = left>\
                <p id="speciality'+d+'" value="Терапевт">'+speciality+'</p>\
                <h2><b id="nameofdoctor'+i+'>'+name+'</b></h2>\
                <p>'+work_age+'</p>\
                <p>'+university+'</p>\
                <h2><b>'+cost+' &#8381</b></h2>\
                <p class = \'time-ago\'><img src = "media/gall.png">Последняя запись к этому врачу была 2 часа назад</p>\
              </div>\
              <div class = "record-panel col-5">\
                <p>Выберите время приема для записи онлайн</p>\
                <div class = \'button-panel\'>\
                  <button id=\'left\' class = \'left\' onmouseover="colorchange(\'left\')" onclick="setDate(\'left\')">Среда,11</button>\
                  <button id=\'center\' class = \'center\' onmouseover="colorchange(\'center\')" onclick="setDate(\'center\')">Четверг,12</button>\
                  <button id=\'right\' class = \'right\' onmouseover="colorchange(\'right\')" onclick="setDate(\'right\')">Пятница,13</button>\
                </div>\
                <div class = \'time-panel\' onclick=>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'13:00\')">13:00</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'13:30\')">13:30</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'13:50\')">13:50</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'14:10\')">14:10</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'14:30\')">14:30</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'14:50\')">14:50</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'15:10\')">15:10</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'15:30\')">15:30</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'15:50\')">15:50</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'16:10\')">16:10</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'16:30\')">16:30</button>\
                  <button data-toggle="modal" data-target="#exampleModalCenter" onClick="setButton(\'16:50\')">16:50</button>\
                </div>\
                <p class = \'number\'>Телефон для записи: 8(499)519-37-05</p>\
              </div>\
            </div>\
          </div>\
        </div>\
      </div>\
    </div>'
    document.write(s);*/
}