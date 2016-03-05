<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
	  <title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ 乾杯~ - bilibili</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/css/succed.css">
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
                                <li><a href = "##" id = "noface"><img src = "resource/images/noface.gif" id = "nofaceImg"></a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class = "bili">
                            <a href = "##" id = "bili"></a>
                        </div>  
                  </div>
    <div class = "second">
      <div class = "secondtop">
      <!-- <div>
        
      </div> -->
        <form action = "index.php/search/all" method="GET" class = "sectopcon">
          <input class = "secondsoin" name="keyword">
          <button type = "submit" class = "secondsou">搜索
          </button>
        </form>
      </div>
       
     <div class = "second-content">
        
        <div class = "second-contop">
           <div class = "contopfl">综合</div>
           <div class = "contopfl">视频</div>
           <div class = "contopfl">番剧</div>
           <div class = "contopfl">影视</div>
           <div class = "contopfl">专题</div>
           <div class = "contopfl">话题</div>
           <div class = "contopfl" id = "contopflend">UP主</div>
         </div>
         <div class = "second-contli">
           <li class = "second-li" id = "second-li1">
             <div class = "second-thr">综合排序</div>
            <a href = "##" class = "second-thra">最多点击</a>
            <a href = "##" class = "second-thra">最新发布</a>
           </li>
           <li class = "second-li">
             <div class = "second-thr">全部时常</div>
             <a href = "##" class = "second-thra">10分钟以下</a>
             <a href = "##" class = "second-thra">10-30分钟</a>
             <a href = "##" class = "second-thra">30-60分钟</a>
           </li>
           <li class = "second-li">
             <div class = "second-thr">全部分区</div>
             <a href = "##" class = "second-thra">动画</a>
             <a href = "##" class = "second-thra">音乐</a>
             <a href = "##" class = "second-thra">舞蹈</a>
             <a href = "##" class = "second-thra">游戏</a>
           </li>
         </div>
<?php foreach ($result->result() as $item):?>
         <div>
           <div class = "second-div">
             <div class = "secondDiv">
                    <a href = "index.php/video/<?php echo $item->id ;?>" target="_blank" title = "<?php echo $item->title?>">
                      <img src = "images/search_images/<?php echo $item->id.'.jpg';?>">
                   <!--    <span class="thirdTime">38:02</span> -->
                      <p><?php echo $item->title?></p>  
                      <span class = "bofang"><?php echo $item->hot;?></span>
                      <span class = "timeDIv"><?php echo $item->postime;?></span>
                      <span class = "bozhu"><?php echo $item->uid;?></span>                      
                    </a>
                </div>


           </div>
         </div>
     </div>  
<?php endforeach;?>

   

    <script src = "js/succed.js"></script>