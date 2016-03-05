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

