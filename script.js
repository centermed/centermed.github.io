   var i=1,count=0;
  function setimg(a){
    if(a==0 && i==1) i=4;
    else if(a==0 && i>1) i--;
    else if(a==1 && i<4) i++;
    else if(a==1 && i==4) i=1;
    if(i==2) var s="media/slide"+i+".png"
    else var s="media/slide"+i+".jpg"
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