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
              <img src = "resource/images/denglu.png">
           </div>
           <div>
           	  <div class = "threeL">
           	  	<div class = "threeL-content">
           	  	    <div>
           	  	    	
           	  	    </div>
           	  	    <div>
           	  	    	<img src = "resource/images/erdeng.png" id = "erdeng">
           	  	    </div>
           	  	     
           	  	    <p id = "saomiao">扫描二维码登录</p>
           	  	    <p id = "kehuduan">请使用<a href = "##" id = "bilike">哔哩哔哩客户端</a></p>
           	  		<img src = "resource/images/twoPeo.png" id = "twoPeo">
           	  		<img src = "resource/images/help.png" id = "help">
           	  		<div>
           	  			<img src = "resource/images/app.png" id = "threeDown">
           	  		</div>
           	  		<div>
           	  			<img src="">
           	  		</div>
           	  	</div>
           	  </div>
           	  <div class = "threeR">
           	  	   <?php echo form_open('login'); ?>
	           	  	   	<input type = "text" placeholder= "你的手机号/邮箱" id = "IDcard" name="username">
                      <font color="red"><?php echo form_error('username'); ?></font>
	           	  	   	<input type = "password" placeholder = "密码" name="password"><font color="red"><?php echo form_error('password'); ?></font>
	           	  	   	<a href = "##" id = "forget">忘记密码？></a>
	           	  	   	<input type = "text" placeholder = "验证码" id = "yanzheng" name="captcha">
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

	           	  	   	<div class = "agree">
		                  <label>
		                  	 <input type = "checkbox" id = "checkbox" value="on">记住密码
		               	     <span>不是自己的电脑不要勾选此项</span>
		                  </label>              	 
		               </div>
		               <input type = "submit" value = "登陆" id = "submitdeng" name="submit">
		               <a href = "index.php/register/phone" id  = "zhuceend">注册</a>
		               <a href = "##" id = "weismall">微博账号登陆</a>
		               <a href = "##" id = "qq">qq账号登陆</a>
		               
           	  	   </form>
           	  </div>
           </div>
        </div>
  </div>
  <script src = "resource/js/denglu.js"></script>