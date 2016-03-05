"use strict";
var bimg = ["resource/images/bnum8.jpg","resource/images/bnum7.jpg","resource/images/bnum6.png","resource/images/bnum5.jpg","resource/images/bnum4.jpg","resource/images/bnum3.jpg","resource/images/bnum2.jpg","resource/images/bnum1.jpg"];
var list = document.getElementsByClassName('circle');
var pic = document.getElementsByClassName('second-first')[0];
var ba = document.getElementsByClassName('ba')[0];
var src2 = "resource/images/smile.png"
var bav = ["野生技术协会视频回顾","和小电视一起环游世界吧～☆","讲故事大赛！（雾","让我们一起吃吧","周末放映室","番剧年终盘点","玩游看世界","2016冬季日剧导航"];
for (let i = 0; i < list.length; i++){

   list[i].onmouseover = function(e){
      e.preventDefault();    
      list[i].style.width = "7px";
      list[i].style.height = "7px"; 
      list[i].style.backgroundColor = "#00a1d6";
      list[i].style.borderRadius = "6px";
      list[i].style.border = '2px solid #fff';

   }
   list[i].onmouseout = function(e){
      e.preventDefault();     
      list[i].style.backgroundColor = "#fff";
      list[i].style.width = "10px";
      list[i].style.height = "10px";
      list[i].style.border = '0px none #fff';
      list[i].style.borderRadius = "6px";
   
   }
   list[i].onclick = function(e){
      e.preventDefault();
      var src = bimg[i];   
      list[i].style.backgroundColor = "#00a1d6";
      ba.innerText = bav[i];
      pic.style.backgroundImage = 'url('+ src +')';
      list[i].style.width = "7px";
      list[i].style.height = "7px"; 
      list[i].style.borderRadius = "6px";
      // list[i].style.backgroundImage = 'url('+ src2 +')';
      // list[i].style.backgroundPosition = "-6px -6px";
   }
}
var num = 0;
setInterval(turnpic,3000); //每隔4秒转换图片
 function turnpic(){
   
   if(num == bimg.length-1)
        num = 0;
   else
        num += 1;
   var src = bimg[num];  
   pic.style.backgroundImage = 'url('+ src +')';
}
var bwrap = document.getElementById('more');
var secondFirst = document.getElementsByClassName('second-first')[0];
secondFirst.onmouseover = function(e){
      e.preventDefault();
      bwrap.style.visibility = "visible";
     
   }
secondFirst.onmouseout = function(e){
      e.preventDefault();
      bwrap.style.visibility = "hidden";
     
   }

var topLast = document.getElementsByTagName("form")[0];
var button = document.getElementsByClassName('search-submit')[0];
var topend = document.getElementsByClassName('top-end')[0];
topLast.onmouseover = function(e){
      e.preventDefault();
      button.style.backgroundColor = "#fff";
      topend.style.backgroundColor = "#fff";
   }
topLast.onmouseout = function(e){
      e.preventDefault();
      button.style.backgroundColor = "rgba(253,250,239,0.9)";
      topend.style.backgroundColor = "rgba(253,250,239,0.9)";
   }

var mobile = document.getElementsByClassName('mobile')[0];
var box = document.getElementsByClassName('box1')[0];
mobile.onmouseover = function(e){
      e.preventDefault();
      var src = "resource/images/app2.png";
      mobile.style.backgroundImage = 'url('+ src +')';
      box.style.visibility = "visible";
     
   }
mobile.onmouseout = function(e){
      e.preventDefault();
      var src = "resource/images/app1.png";
      mobile.style.backgroundImage = 'url('+ src +')';
      box.style.visibility = "hidden";
   }
var second = document.getElementsByClassName('second-second')[0];
var secondL = document.getElementsByClassName('secondL')[0];
var secondR = document.getElementsByClassName('secondR')[0];
   second.onmouseover = function(e){
      e.preventDefault(); 
      secondL.style.visibility = "visible";
      secondR.style.visibility = "visible";
   }
   second.onmouseout = function(e){
      e.preventDefault(); 
      secondL.style.visibility = "hidden";
      secondR.style.visibility = "hidden";
   }
var secondWrap = document.getElementsByClassName('secondWrap');
var secondWord = document.getElementsByClassName('secondWord');
var secondDiv = document.getElementsByClassName('secondDiv');
var secondP = document.getElementsByClassName('secondP');
for (let i = 0; i < secondWrap.length; i++){

   secondDiv[i].onmouseover = function(e){
      e.preventDefault(); 
      secondWord[i].style.marginTop = "0px"; 
      secondWord[i].style.paddingTop = "9px"; 
   }
   secondDiv[i].onmouseout = function(e){
      e.preventDefault();     
      secondWord[i].style.marginTop = "78px";
      secondWord[i].style.paddingTop = "0px";
   }
  
}
var thirdSecond = document.getElementsByClassName('third-second1');
var thirdTop = document.getElementsByClassName('thirdTop');
var thirdTime = document.getElementsByClassName('thirdTime');
var aword = document.getElementsByClassName('aword');
for (let i = 0; i < thirdSecond.length; i++){

   thirdSecond[i].onmouseover = function(e){
      e.preventDefault(); 
      thirdTime[i].style.visibility = "visible"; 
      thirdTop[i].style.visibility = "visible";
      aword[i].style.color = "#00a1d6";
   }
   thirdSecond[i].onmouseout = function(e){
      e.preventDefault();     
      thirdTime[i].style.visibility = "hidden";
      thirdTop[i].style.visibility = "hidden";
      aword[i].style.color = "#000";
   }
 } 
var fourthL = document.getElementsByClassName('fourthL1');
var liveWrap = document.getElementsByClassName('liveWrap');
for (let i = 0; i < fourthL.length; i++){

   fourthL[i].onmouseover = function(e){
      e.preventDefault(); 
      liveWrap[i].style.visibility = "visible";
   }
   fourthL[i].onmouseout = function(e){
      e.preventDefault();     
      liveWrap[i].style.visibility = "hidden";
   }
}
var fifthLL = document.getElementsByClassName('fifth-LL');
var fifthP = document.getElementsByClassName('fifthP');
var fifthEnd = document.getElementsByClassName('fifth-end');

for (let i = 0; i < fifthLL.length; i++){
   
   fifthLL[i].onmouseover = function(e){
      e.preventDefault(); 
      fifthP[i].style.overflow = "visible";
      fifthEnd[i].style.visibility = "hidden";
   }
   fifthLL[i].onmouseout = function(e){
      e.preventDefault();   
      fifthP[i].style.overflow = "hidden";  
      fifthEnd[i].style.visibility = "visible";
   }
}
var xiazai = document.getElementsByClassName('xiazai');
var lastDown = document.getElementsByClassName('lastDown');
for (let i = 0; i < lastDown.length; i++){

   lastDown[i].onmouseover = function(e){
      e.preventDefault(); 
      xiazai[i].style.visibility = "visible";
   }
   lastDown[i].onmouseout = function(e){
      e.preventDefault();    
      xiazai[i].style.visibility = "hidden";
   }
}
var dongtai = document.getElementsByClassName('zhengzai-dongtai');
var shuaxin = document.getElementsByClassName('shuaxin');
for (let i = 0; i < dongtai.length; i++){

   dongtai[i].onmouseover = function(e){
      e.preventDefault(); 
      shuaxin[i].style.MozTransform = "rotate(130deg)";
      shuaxin[i].style.WebkitTransform = "rotate(130deg)";
      shuaxin[i].style.transform = "rotate(130deg)";
   }
   dongtai [i].onmouseout = function(e){
      e.preventDefault();    
      shuaxin[i].style.MozTransform = "rotate(380deg)";
      shuaxin[i].style.WebkitTransform = "rotate(380deg)";
      shuaxin[i].style.transform = "rotate(380deg)";
   }
}
var xinfan = document.getElementsByClassName('xinfan')[0];
   xinfan.onmouseover = function(e){
      e.preventDefault(); 
      xinfan.style.backgroundColor = "#f25d8e";
      xinfan.style.color = "#fff";
      xinfan.style.backgroundImage = "url(resource/images/xinyou2.png)";
   }
   xinfan.onmouseout = function(e){
      e.preventDefault();         
      xinfan.style.backgroundColor = "#fff";
      xinfan.style.color = "#f25d8e";
      xinfan.style.backgroundImage = "url(resource/images/xinyou.png)";
   }
var xinfanLi = document.getElementsByClassName('TVli');
var xinfanTV = document.getElementsByClassName('xinfanTV');
var xinfanXia = document.getElementsByClassName('xinfanXia');
var Spanli = document.getElementsByClassName('Spanli');
var weekday = ["周一","周二","周三","周四","周五","周六","周日"];
var weekdayS = ["一","二","三","四","五","六","日"];
var xinfanTVimg = ["-36px -38px","-165px -38px","-293px -38px","-420px -38px","-549px -38px","-677px -38px","-805px -38px"];
for (let i = 0; i < xinfanLi.length; i++){

    xinfanLi[i].onclick = function(e){
      e.preventDefault(); 
      xinfanLi[i].style.width = "120px";
      Spanli[i].style.marginLeft = "60px";
      Spanli[i].innerHTML = weekday[i];
      Spanli[i].style.color = "#fff";
      Spanli[i].style.fontWeight = "bold";
      xinfanLi[i].style.backgroundColor = "#00a1d6";
      xinfanTV[i].style.display = "block";
      xinfanTV[i].style.backgroundPosition = xinfanTVimg[i];
      xinfanXia[i].style.display = "block";
      var j = 0;
      while(j>=0 && j < xinfanLi.length){
         if(j!=i) {
            xinfanLi[j].style.width = "60px";
            Spanli[j].style.marginLeft = "0px";
            Spanli[j].innerHTML = weekdayS[j];
            Spanli[j].style.color = "#000";
            Spanli[j].style.fontWeight = "normal";
            xinfanTV[j].style.display = "none";
            xinfanLi[j].style.backgroundColor = "#fff";
            xinfanTV[j].style.backgroundPosition = xinfanTVimg[j];
            xinfanXia[j].style.display = "none";
         }
         j++;
      }
   }
}