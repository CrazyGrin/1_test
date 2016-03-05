<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ 乾杯~ - bilibili</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/css/winterzhuce.css">
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
             <?php echo form_open('register/phone'); ?>
               <div>
                 <input class = "id" value = "昵称（例：哔哩哔哩）" name="username">
                 <?php echo form_error('username'); ?>
               </div>
               <div>
                 <div class = "power">
                 	<p>安全系数</p>
                 	<div class = "powerR">
                 		<div class = "power1"></div>
	                 	<div class = "power2"></div>
	                 	<div class = "power3"></div>
	                 	<div class = "power4"></div>
	                 	<div class = "power5"></div>
	                 	<span class = "powerful">弱</span>
                 	</div>
                 	
                 </div>
               	 <input class = "password" placeholder = "密码（6-16个字符组成，区分大小写）" type = "password" name="password">
                 <?php echo form_error('password'); ?>
                 <input class = "password" placeholder = "再次输入密码" type = "password" name="passconf">
                 <?php echo form_error('passconf'); ?>
               </div>
               <div class = "country">
               	 <select>
               	 	<option>中国大陆</option>
               	 	<option>澳门特区</option>
               	 	<option>澳门特区</option>
               	 	<option>台湾</option>
               	 	<option>美国</option>
               	 	<option>香港</option>
               	 	<option>比利时</option>
               	 	<option>澳大利亚</option>
               	 	<option>法国</option>
               	 	<option>加拿大</option>
               	 	<option>日本</option>
               	 	<option>新加坡</option>
               	 	<option>韩国</option>
               	 	<option>马来西亚</option>
               	 </select>
               	 <div id = "phoneNum">
               	 	<input value = "填写常用手机号" class = "number" type = "text" name="phone">
                  <?php echo form_error('phone'); ?>
               	 </div>
               	 
               </div>
               <a href = "index.php/register/mail" class = "e-mail">用邮箱注册></a>
               <div class = "checkDiv">
               	  <input value = "手机验证码" type = "text" class = "check" name="captcha">
               	  <img src="<?php

      $vals = array(
        'word'      => '',
        'img_path'  => 'captcha/',
        'img_url'   => 'captcha/',
        'font_path' => 'fonts/simple.ttf',
        'img_width' => 120,
        'img_height'    => 35,
        'expiration'    => 10,
        'word_length'   => 4,
        'font_size' => 20,
        'img_id'    => 'Imageid',
        'pool'      => '13456789abcdefghijklmnpqrstuvwy',
        'colors'    => array(
          'background' => array(255, 255, 20),
          'border' => array(255, 255, 255),
          'text' => array(0, 80, 100),
          'grid' => array(255, 60, 40)
                )
        );

      $cap = create_captcha($vals);

      $code = $vals['img_url'].$cap['time'].'.jpg';
      $this->session->set_userdata('code',$cap['word']);

      echo $code;

?>" id="captchaImg">
<?php echo form_error('code'); ?>
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
               	    <input type = "submit" value = "注册" class = "zhuceYes"
                    name="submit">
               </div>
               <a href = "##" class = "haved">已有账号，直接登陆></a>
             </form>
           </div>
        </div>
    </div>
    <script src = "resource/js/winterzhuce.js"></script>