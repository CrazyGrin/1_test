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
                                <li><a href = "index.php/" class = "top-first" id = "top-first-Z">主站</a></li>
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
                                   
                  <div class = "top-last">
                         <form action = "index.php/search/all" method = "get"> 
                           <button type = "submit" class = "search-submit"><a href = "index.php/search"><img src = "resource/images/Msearch.png"></a></button> 
                           <input type = "text" name = "keyword"  class="top-end" id = "top-end1" placeholder = "hehe" >
                        </form>
                        <a href = "##" class = "top-end" id = "top-end2"><img src = "resource/images/yinliang.png" id = "yinliang">排行榜</a>  
                       
                  </div>
                  
            </div>
          <div class = "header-content-second">
            <ul>
               <li class = "header-second" id = "header-second"><a href = "##"><div id = "zhuye"></div>首页</a></li>
               <li class = "header-second" >
                       <a href = "##" id = "donghua">
                           <div class = "head-title">
                               
                           </div>
                       动画
                           <div class = "header-two">
                               <ul>
                                   <li class = "one">MAD</li>
                                   <li class = "two">MMD</li>
                                   <li class = "three">短片</li>
                                   <li class = "four">综合</li>
                               </ul>
                           </div>
                       </a>
               </li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>番剧</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>音乐</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>舞蹈</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>游戏</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>科技</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>娱乐</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>鬼畜</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>电影</a></li>
               <li class = "header-second" id = "second-TV"><a href = "##"><div class = "head-title" id = "second-tv"></div>电视剧</a></li>
               <li class = "header-second"><a href = "##"><div class = "head-title"></div>时尚</a></li>
            </ul>
            <div class="gs">      
                  <a href = "##" id = "garden">广场</a>
                  <a href="##" id="straight">直播</a>
                  <div class = "mobile">
                      <a href = "##"></a>
                      <img src = "resource/images/mobile-box.png" class = "box1">
                  </div>
            </div>
          </div>
      </div>
    </div>