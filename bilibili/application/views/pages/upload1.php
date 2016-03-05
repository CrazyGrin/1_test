<?php echo form_open_multipart('upload'); ?>
封面图<input type="file" name="imagefile" />
<input type="submit" value="上传" />
</form>
<form id="upload-form" action="index.php/upload/video" method="POST" enctype="multipart/form-data"
    style="margin:15px 0" target="hidden_iframe">
视频<input type="file" name="file1"/>
<p><input type="submit" value="Upload" /></p>
<input type="hidden" name="" value="test" />
</form>
<iframe id="hidden_iframe" name="hidden_iframe" src="about:blank" style="display:none;"></iframe>
<div id="progress" class="progress" style="margin-bottom:15px;display:none;">
        <div class="bar" style="width:0%;"></div>
        <div class="label">100%</div>
</div>
<?php echo form_open_multipart('upload/do_upload'); ?>
标题（必填）<input type="text" id="title" name="title"><?php echo form_error('title'); ?><br>
备注（选填）<input type="text" id="message" name="message"><br>
<select name="column">
<option value="bangumi">番剧</option>
<option value="donghua">动画</option>
<option value="music">音乐</option>
<option value="moive">电影</option>
</select><br>
<select name="type">
<option value="series">连载动画</option>
<option value="over">完结动画</option>
<option value="news">资讯</option>
<option value="extend">官方延伸</option>
<option value="china">国产动画</option>
</select><br>
标签（Tag）半角逗号隔开<input type="text" id="tag" name="tag" value="番剧"><font color="red"><?php echo form_error('tag'); ?></font> <br>
<?php foreach ($todo_list->result() as $item):?>
		<label><input type="checkbox" name="vehicle[]" value="<?php echo $item->name;?>"/><?php echo $item->name;?></label> 
<?php endforeach;?><br>
投稿类型<input type="radio" checked="checked" name="stype" value="转载" />转载
<input type="radio" name="stype" value="自制" />自制
<input type="radio" name="stype" value="补档" />补档<br>
视频出处<input type="text" name="comefrom" id="comefrom"></input><br>
简介<input type="text" name="summary" id="summary"></input><br>
<input type="text" name="pid" id="pid"></input><br>
<input type="submit" value="上传" />
</form>