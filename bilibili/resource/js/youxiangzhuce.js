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
var id = document.getElementsByClassName('id')[0];
id.onclick = function(e){
      e.preventDefault();
      if (id.value == '填写常用邮箱') {
          id.value = "";
      }
   }
id.onblur = function(e){
      e.preventDefault();
      if (id.value != '填写常用邮箱'&& id.value!='') {
      }
      else {
      	id.value = '填写常用邮箱';
      }     
   }
var check = document.getElementById('check');
check.onclick = function(e){
      e.preventDefault();
      if (check.value == '验证码') {
          check.value = "";
      }
   }
check.onblur = function(e){
      e.preventDefault();
      if(check.value == ''){
      	check.value = '验证码';
      }
   }
var checkbox = document.getElementById('checkbox');
var zhuceYes = document.getElementsByClassName('zhuceYes')[0];
if (checkbox.checked == true) {
        zhuceYes.style.backgroundColor = "#00a1d6";
        zhuceYes.style.color = "#fff";
    }
