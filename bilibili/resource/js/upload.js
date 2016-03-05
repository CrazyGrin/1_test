"use strict";
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
var sousuo = document.getElementById('sousuo');
var topSearch = document.getElementsByClassName('topSearch')[0];
   sousuo.onmouseover = function(e){
      e.preventDefault();
      sousuo.onmouseout = function(e){
      e.preventDefault();
      sousuo.style.width = "78px";
      topSearch.style.width = "108px";
   }
      sousuo.style.width = "148px";
      topSearch.style.width = "178px";
   }

   sousuo.onclick = function(e){
      e.preventDefault();
      sousuo.onmouseout = function(e){
      e.preventDefault();
      sousuo.style.width = "148px";
      topSearch.style.width = "178px";
   }
      sousuo.style.width = "148px";
      topSearch.style.width = "178px";
      sousuo.style.color = "#000";

   }
  sousuo.onmouseout = function(e){
      e.preventDefault();
      sousuo.style.width = "78px";
      topSearch.style.width = "108px";
   }
  sousuo.onblur = function(e){
      e.preventDefault();
      sousuo.style.width = "78px";
      topSearch.style.width = "108px";
      sousuo.style.color = "#a9a9a9";
   }
var zhuye = document.getElementsByClassName('zhuye')[0];
zhuye.onclick = function(e){
   e.preventDefault();
   zhuye.style.backgroundColor = "#2b99ce";
}
zhuye.onblur = function(e){
   e.preventDefault();
   zhuye.style.backgroundColor = "#fff";
}
var touguan = document.getElementsByClassName('tou-guan')[0];
touguan.onclick = function(e){
   e.preventDefault();
   touguan.style.backgroundColor = "#2b99ce";
}
touguan.onblur = function(e){
   e.preventDefault();
   touguan.style.backgroundColor = "#fff";
}
var iconba = document.getElementsByClassName('icon-baa');
for(var i = 0;i < iconba.length;i++){
   iconba[i].onclick = function(e){
   e.preventDefault();
}
}
// var secondRli5 = document.getElementById('secondRli5');
// var secondcheck = document.getElementsByClassName('secondcheck')[0];
// secondcheck.onclick = function(e) {
//     e.preventDefault();
//    secondRli5.style.height = "87px";
// }
