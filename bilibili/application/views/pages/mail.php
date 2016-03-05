<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ 乾杯~ - bilibili</title>
	<link rel = "stylesheet" type = "text/css" href = "resource/css/youxiangzhuce.css">
	<base href="<?php echo base_url();?>"/>
</head>
<body>
     <div class = "header">
    	 <div class = "header-content">
                <ul class = "first">
                    <li><a href = "##" class = "top-first" id = "top-first-Z">主站</a></li>
                    <li ><a href = "##" class = "top-first">画友</a></li>
                    <li class = "headLI">
                        <a href = "##" class = "top-first" id = "top-first-G">游戏中心</a>                        
                        </li>
                    <li ><a href = "##" class = "top-first">直播</a></li>
                    <li ><a href = "##" class = "top-first">周边</a></li>
                    <li ><a href = "##" class = "top-first" id = "top-first-J">日本游</a></li>
                    <div><a href = "index.php/upload" id = "tou" >投稿</a></div>
                    <li><a href  = "index.php/register" class = "top-second" id= "zhuce" >注册</a></li>
                    <li><a href = "index.php/login" class = "top-second" >登陆</a></li>
                    <div class = "topSearch">
                    	<form action = "##">
                    	      <input placeholder = "搜索" id = "sousuo">
                    	      <button><img src = "resource/images/sousuo.png"></button>
                        </form>
                    </div>
                    
                </ul>              
         </div>
      </div>
    <div class = "second">
      <div class = "second-content">
        <img src = "resource/images/bilibili.png">
      </div>
    </div>
    <div class = "three">
        <div class = "three-content"> 
           <div class = "three-top">
              <img src = "resource/images/zhuce.png">
           </div>
           <div class = "three-middle">
             <form method = "post" >
               <div>
                 <input class = "id" value = "填写常用邮箱">
               </div>
               
              
               <a href = "index.php/register/phone" class = "e-mail">用手机注册></a>
               <div class = "checkDiv">
               	  <input value = "验证码" type = "text" id = "check">               	 
               </div>
               <div class = "agree">
                  <label>
                  	 <input type = "checkbox" id = "checkbox">我已同意
               	     <a href = "##">《哔哩哔哩弹幕网用户使用协议》</a>
               	     和
               	     <a href = "##" id = "guifan">《哔哩哔哩弹幕网社区规范》</a>
                  </label>              	 
               </div>
               <div class = "zhuceDiv">
               	    <input type = "submit" value = "发送验证邮件" class = "zhuceYes">
               </div>
               <a href = "##" class = "haved">已有账号，直接登陆></a>
             </form>
           </div>
        </div>
    </div>

<script src = "resource/js/youxiangzhuce.js"></script>