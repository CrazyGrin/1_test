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


var secondso = document.getElementsByClassName('secondsou')[0];
secondso.onclick = function(e) {
   e.preventDefault();
   alert("不好意思该页面尚未提供查询服务")
}


