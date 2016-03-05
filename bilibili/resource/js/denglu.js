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
   var erdeng = document.getElementById('erdeng');
   var help = document.getElementById('help');

   erdeng.onmouseover = function(e){
      e.preventDefault();
      help.style.display = "block";
   }

   help.onmouseout = function(e){
      e.preventDefault();
      help.style.display = "none";
   }
   var bilike = document.getElementById('bilike');
   var threeDown = document.getElementById('threeDown');
   var saomiao = document.getElementById('saomiao');
   bilike.onmouseover = function(e) {
      e.preventDefault();
      threeDown.style.display = "block";
      saomiao.innerHTML = "扫码下载客户端";
   }
    bilike.onmouseout = function(e) {
      e.preventDefault();
      threeDown.style.display = "none";
      saomiao.innerHTML = "扫描二维码登录";
   }
   var yanzheng = document.getElementById('yanzheng');
   var IDcard = document.getElementById('IDcard');
   IDcard.onclick = function(e){
      e.preventDefault();
      if (IDcard.value == '你的手机号/邮箱') {
          IDcard.value = "";
      }
   }
   IDcard.onblur = function(e){
      e.preventDefault();
      if (IDcard.value != '你的手机号/邮箱'&& IDcard.value!='') {

      }
      else {
         IDcard.value = '你的手机号/邮箱';
      }     
   }
   yanzheng.onclick = function(e){
      e.preventDefault();
      if (yanzheng.value == '验证码') {
          yanzheng.value = "";
      }
   }
   yanzheng.onblur = function(e){
      e.preventDefault();
      if (yanzheng.value != '验证码'&& yanzheng.value!='') {

      }
      else {
         yanzheng.value = '验证码';
      }     
   }