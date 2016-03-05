
	<?php echo form_open('login'); ?>
     	<input type="text"  placeholder="你的手机号/邮箱" id="username" name="username"><font color="red"><?php echo form_error('username'); ?></font><br>
     	<input type="password" placeholder="密码" id="password" name="password"><font color="red"><?php echo form_error('password'); ?></font> <br>
     	<input type="text" placeholder="验证码" name="captcha" value=" "><font color="red"><?php echo form_error('code'); ?></font><br>
     	<img src="<?php

			$vals = array(
		    'word'      => '',
		    'img_path'  => 'captcha/',
		    'img_url'   => 'captcha/',
		    'font_path' => 'fonts/simple.ttf',
		    'img_width' => 120,
		    'img_height'    => 35,
		    'expiration'    => 10,
		    'word_length'   => 5,
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
     	<input type="submit" name="submit" value="登陆" />
     	<a href="index.php/register/phone"><input type="button" value="注册"></a>
     	<p><input type="checkbox" name="vehicle" value="on" checked="checked" /> 记住我</p>
    </form>