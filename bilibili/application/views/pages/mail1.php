
	<?php echo form_open('register/mail'); ?>

	<h5>Email Address</h5>
	<?php echo form_error('email'); ?>
	<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

	<div><input type="submit" value="Submit" /></div>
	<a href="index.php/register/phone">手机注册</a>
	</form>