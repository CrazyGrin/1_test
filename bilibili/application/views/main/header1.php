<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
	  <title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ 乾杯~ - bilibili</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/css/winterLarge.css">
    <base href="<?php echo base_url();?>"/>
</head>
<body>
<div class = "header">
      <div class = "header-content">
        <div class="header-content-first">
                  <div class = "header-first">
                        <div class = "header-first-content">
                            <ul class = "first">
                                <li><a href = "##" class = "top-first" id = "top-first-Z">主站</a></li>
                                <li ><a href = "##" class = "top-first">画友</a></li>
                                <li ><a href = "##" class = "top-first" id = "top-first-G">游戏中心</a></li>
                                <li ><a href = "##" class = "top-first">直播</a></li>
                                <li ><a href = "##" class = "top-first">周边</a></li>
                                <li ><a href = "##" class = "top-first" id = "top-first-J">日本游</a></li>
                                <div><a href = "index.php/upload" id = "tou" >投稿</a></div>
                                <?php
                                   
                                    if($this->session->disable != 1 || $this->session->isLogin !=1 ) {
                                      echo '<li><a href="index.php/register/phone" class = "top-second">注册</a></li>
                                <li><a href="index.php/login" class = "top-second">登陆</a></li>';
                                    } else {
                                      echo '<li><a href="index.php/logout" class = "top-second"> 退出</a></li>
                                <li><a href="#" class = "top-second">'.$this->session->name.',</a></li><li><a href  = "##" class = "top-second">历史</a></li>
                                <li><a href = "##" class = "top-second">收藏夹</a></li>
                                <li><a href = "##" class = "top-second">动态</a></li>
                                <li><a href = "##" class = "top-second">消息</a></li>
                                <li><a href = "##" id = "noface"><img src = "images/noface.gif" id = "nofaceImg"></a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class = "bili">
                            <a href = "##" id = "bili"></a>
                        </div>  
                  </div>  
            </div>