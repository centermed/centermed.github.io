   var i=1,count=0,d=0,k=0;
  function setimg(a){
    if(a==0 && i==1) i=5;
    else if(a==0 && i>1) i--;
    else if(a==1 && i<5) i++;
    else if(a==1 && i==5) i=1;
    if(i>2) var s="media/slide"+i+".jpg"
    else var s="media/slide"+i+".png"
    document.getElementById("slide_id").src=s;
    timerId = setTimeout(setimg, 5000 ,1);
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
 function setOption(){
  selected=document.getElementById("service_options").selectedIndex;
  document.getElementById('costs').placeholder=uslugi[selected*3+2];

 }
 function setButton(a,id_count){
   document.getElementById("speciality").placeholder=mydata[id_count*5+4];
   a=document.getElementById("service_options");
   uslugi=data_usluga.split(';').join("^").split('^');
   options=0;
   for(var x=0;x<uslugi.length/3-1;x++){
    if(mydata[id_count*5+4]==uslugi[x*3]){
      a.options[options]=new Option(uslugi[x*3+1],"str"+options);
      a.options[options].selected=setOption(x);
      options++;
    }
   }
   document.getElementById("doctor_name").placeholder=mydata[id_count*5+1];
}
function setDate(button_id,id){
  k=1;
  document.getElementById("left"+id).style.color="#707070";
  document.getElementById("left"+id).style.backgroundColor="#F8F8FF";
   document.getElementById("center"+id).style.color="#707070";
  document.getElementById("center"+id).style.backgroundColor="#F8F8FF";
   document.getElementById("right"+id).style.color="#707070";
  document.getElementById("right"+id).style.backgroundColor="#F8F8FF";
	document.getElementById(button_id+id).style.color="#F8F8FF";
	document.getElementById(button_id+id).style.backgroundColor="#2D8FD8";
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
function setService(id){
  a=document.getElementById("service"+id);
  if (a.style.display ==  "block") a.style.display = "none";
  else a.style.display = "block";
}