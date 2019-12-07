function openTabs(tabname){
    var x = document.getElementsByClassName("right");
    for(var i=0; i<x.length; i++){
        x[i].style.display ="none";
    }
    console.log("sdasdasd");
    document.getElementById(tabname).style.display="block";
 }



 var add=document.getElementById('addbill');
 var nedd=document.getElementById('havebill');
 var con=document.getElementById('havebill').innerHTML;
 console.log(con);
 add.onclick=function(){
     nedd.innerHTML=nedd.innerHTML+con;
     console.log("2222");
 };

 function openSale(tabsale){
    var x = document.getElementsByClassName("saletabcon");
    for(var i=0; i<x.length; i++){
        x[i].style.display ="none";
    }
    console.log("sdasdasd");
    document.getElementById(tabsale).style.display="block";
 }


 function addManche(el, classname){
   el.setAttribute('class', classname);
}
function delManche(el, classname){
   el.setAttribute('class', classname)
}

 document.getElementById("creatus").onclick=function(){
    document.getElementById("creatusform").style.display="block";
    addManche(manChan, 'manChan');
    console.log("222222");
 };
 function openNews(tabnews){
   var x = document.getElementsByClassName("news");
   for(var i=0; i<x.length; i++){
       x[i].style.display ="none";
   }
   console.log("open news");
   document.getElementById(tabnews).style.display="block";
}
 function exit(){
    document.getElementById("creatusform").style.display='none';
    delManche(manChan, '');
 }







 setInterval(
    function(){
       var today = new Date();
       var weekday=new Array(7);
       weekday[0]="Sunday";
       weekday[1]="Monday";
       weekday[2]="Tuesday";
       weekday[3]="Wednesday";
       weekday[4]="Thursday";
       weekday[5]="Friday";
       weekday[6]="Saturday";
       var day = weekday[today.getDay()];
       var dd = today.getDate();
       var mm = today.getMonth()+1; //January is 0!
       var yyyy = today.getFullYear();
       var h=today.getHours();
       var m=today.getMinutes();
       var s=today.getSeconds();
       m=checkTime(m);
       s=checkTime(s);
       nowTime = h+":"+m+":"+s;
       if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;
    
       tmp='<div id="date">'+today+'</div><div id="time">'+nowTime+'</div>';
    
       document.getElementById("clock").innerHTML=tmp;
       function checkTime(i)
       {
          if(i<10){
         i="0" + i;
          }
          return i;
       }
    },1000
);

