
<?php echo form_open('register/phone'); ?>

<h5>Username</h5>
<?php echo form_error('username'); ?>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

<h5>Password</h5>
<?php echo form_error('password'); ?>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('passconf'); ?>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Phone Number</h5>
<?php echo form_error('phone'); ?>
<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" size="50" />

<h5>Code</h5>
<?php echo form_error('code'); ?>
<input type="text" name="captcha" value="" size="5" />
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

<div><input type="submit" value="Submit" /></div>
<a href="index.php/register/mail">邮箱注册</a>
</form>