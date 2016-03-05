"use strict";
var bimg = ["images/bnum8.jpg","images/bnum7.jpg","images/bnum6.png","images/bnum5.jpg","images/bnum4.jpg","images/bnum3.jpg","images/bnum2.jpg","images/bnum1.jpg"];
var list = document.getElementsByClassName('circle');
var pic = document.getElementsByClassName('second-first')[0];
var ba = document.getElementsByClassName('ba')[0];
var src2 = "images/smile.png"
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