   var i=1,count=0,d=0,k=0,date=0 ;
  function setimg(a){
    if(a==0 && i==1) i=4;
    else if(a==0 && i>1) i--;
    else if(a==1 && i<4) i++;
    else if(a==1 && i==4) i=1;
    for(var slider_c=1;slider_c<5;slider_c++) document.getElementById('slider'+slider_c).style.display="none";
    document.getElementById('slider'+i).style.display="block";
    if(i==2) var s="media/slide"+i+".png";
    else var s="media/slide"+i+".jpg";
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
  document.getElementById('costs').placeholder=uslugi[selected*3+2]+String.fromCharCode(8381);

 }
 function setButton(time,id_count){
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
    now = new Date();
    now_date=now.getDate();
    hours=now.getHours();
    if(hours>20) now_date++;
    count_date=0;
    for (var i=now_date;i<=31;i++) {
      document.getElementById("date_priem").options[count_date]=new Option(i+".05.2020","str"+i);
      if(date==i) document.getElementById("date_priem").options[count_date].selected="selected";
      count_date++;
    }
    time_counter=0;
    for(var x=2;x<18;x++){
                  if(data_time[id_count*18+x]!=0){
                    document.getElementById("time_priema").options[time_counter]=new Option(data_time[id_count*18+x],"str"+time_counter);
                    if(data_time[id_count*18+x]==time) document.getElementById("time_priema").options[time_counter].selected="selected";
                    time_counter++;
                }
                }    
   document.getElementById("doctor_name").placeholder=mydata[id_count*5+1];
   document.getElementById("doctors_id").placeholder=mydata[id_count*5+0];;
}
function setDate(button_id,id){
  k=1;
  OurDate= new Date();
  date= OurDate.getDate();
  dates=date;
  hours= OurDate.getHours();
  minutes=OurDate.getMinutes();
  if(hours>20) dates++;
  document.getElementById("left"+id).style.color="#707070";
  document.getElementById("left"+id).style.backgroundColor="#F8F8FF";
   document.getElementById("center"+id).style.color="#707070";
  document.getElementById("center"+id).style.backgroundColor="#F8F8FF";
   document.getElementById("right"+id).style.color="#707070";
  document.getElementById("right"+id).style.backgroundColor="#F8F8FF";
	document.getElementById(button_id+id).style.color="#F8F8FF";
	document.getElementById(button_id+id).style.backgroundColor="#2D8FD8";
  if (button_id=="left" && dates==date) {
    for (var x=0;x<15;x++){
      this_button=document.getElementById("button"+id+x);
      button_time=this_button.innerHTML.split(":");
      if(button_time[0]<hours || (button_time[0]==hours && button_time[1]<minutes)) {
        this_button.disabled=true;
        this_button.style='background-color: #a0a0a0; color:white';
      }
    }
  }
  if(button_id!='left'){
	if(button_id=="center") date++;
	if(button_id=="right") date+=2;
	 document.getElementById("date_priem").value=date+".05.2020"
   for (var x=0;x<15;x++){
    this_button=document.getElementById("button"+id+x);
    this_button.disabled=false;
    this_button.style='background-color: #F8F8FF; color:#707070';
  }
}
}
function colorchange(button_id,id){
  if(k!=1){
  document.getElementById("left"+id).style.color="#707070";
  document.getElementById("left"+id).style.backgroundColor="#F8F8FF";
   document.getElementById("center"+id).style.color="#707070";
  document.getElementById("center"+id).style.backgroundColor="#F8F8FF";
   document.getElementById("right"+id).style.color="#707070";
  document.getElementById("right"+id).style.backgroundColor="#F8F8FF";
  document.getElementById(button_id+id).style.color="F8F8FF";
  document.getElementById(button_id+id).style.backgroundColor="#2D8FD8";
}
}
function setService(id){
  a=document.getElementById("service"+id);
  if (a.style.display ==  "block") a.style.display = "none";
  else a.style.display = "block";
}