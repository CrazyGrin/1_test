<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ 乾杯~ - bilibili</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/css/myself1.css">
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
                                <li class = "headLI">
                                    <a href = "##" class = "top-first" id = "top-first-G">游戏中心</a>
                                    </li>
                                <li ><a href = "##" class = "top-first">直播</a></li>
                                <li ><a href = "##" class = "top-first">周边</a></li>
                                <li ><a href = "##" class = "top-first" id = "top-first-J">日本游
                                    <em class = "new"></em></a></li>
                               <!--  <div>
                                    <a href = "##" id = "tou" >投稿 </a><div class = "touguan">
                                      <p>投稿管理</p>
                                    </div>
                                    <div class = "shitou">
                                      <p>视频投稿</p>
                                    </div>
                                   
                                    
                                </div> -->
                                <li><a href  = "##" class = "top-second">历史</a></li>
                                <li><a href = "##" class = "top-second">收藏夹</a></li>
                                <li><a href = "##" class = "top-second">动态</a></li>
                                <li><a href = "##" class = "top-second">消息</a></li>
                                <li><a href = "##" id = "noface"><img src = "resource/images/noface.gif" id = "nofaceImg"></a></li>
                                <div class = "topSearch">
                                    <form action = "##">
                                          <input placeholder = "搜索" id = "sousuo">
                                          <button></button>
                                      </form>
                                </div>
                            </ul>

                        </div>
              </div>
           </div>
         </div>
     </div>
     <div class = "second">
       <div class = "second-content">
         <a href = "##"><img src = "resource/images/bilibili.png"></a>
         <a href = "##" class ="twopeo"><img src = "resource/images/twopeo.png"></a>
         <div>
            <div class = "secondL">
             <div class = "user">
               <em id = "user"></em>
               用户中心
             </div>
             
               <a href = "##" class = "zhuye"><em class = "iconzhu"></em>主页</a>
               <a href = "##" class = "tou-guan"><em class = "icontou"></em>投稿·管理</a>
               <div class = "icon-a">
                 <a href = "##" ><em class = "icon-shitou"></em>视频投稿</a>
                 <a href = "##"><em class = "icon-touman"></em>投稿管理</a>
                 <a href = "##"><em class = "icon-fan"></em>弹幕反馈</a>
                 <a href = "##"><em class = "icon-guo"></em>过滤管理</a>
                 <a href = "##"><em class = "icon-xiu"></em>失效修复</a>
                 <a href = "##"><em class = "icon-man"></em>专题管理</a>
                 <a href = "##"><em class = "icon-shen"></em>我的申诉</a>
                 <a href = "##"><em class = "icon-add"></em><i class = "newi"></i>充电计划</a>
               </div>
               <div class = "icon-ba">
                 <a href = "##" class = "icon-baa"><em class = "icon-shou"></em>收藏夹</a>
                 <a href = "##"  class = "icon-baa"><em class = "icon-zhuan"></em>专题订阅</a>
                 <a href = "##"  class = "icon-baa"><em class = "icon-my"></em>MyList</a>
                 <a href = "##"  class = "icon-baa"><em class = "icon-fri"></em>好友</a>
                 <a href = "##" class = "icon-baa"><em class = "icon-qzone"></em>空间</a>
                 <a href = "##" class = "icon-baa"><em class = "icon-ID"></em>账号</a>
                 <a href = "##" class = "icon-baa"><em class = "icon-shop"></em>商城</a>
               </div>
         </div> 
         <div>
            <div class = "secondR">
                 <div class = "second-top">
                     <em class = "icon-1"></em>投稿
                  </div>
                  <div class = "secondRplea">
                   <em class = "icon-please"></em> 请正确填写投稿相关信息。
                  </div>
                  <div>
                    <?php echo form_open_multipart('upload'); ?>
                  
                         <li class = "secondRli" id = "secondRli1">
                           <div class = "fengmianL">
                              <p class = "secondP1">上传图片</p>
                              <p class = "secondP2">点击图片上传</p>
                              <p class = "secondP2">建议至少480*300</p>
                              <p class = "secondP2">支持高清封面960*600</p>
                            </div>
                            <div class = "shangchuan">
                              <img src="<?php 
                              if(!empty($imgurl)){
                              echo $imgurl;
                              }
                              ?>">
                              <div class = "fengmian"><input type = "file" class="file1" name="imagefile"></input></div>
                              
                            </div>
                            <button class = "up">上传</button>
                         </li>

                    </form> 
                    <li class = "secondRli" id = "secondRli3">
                      <form id="upload-form" action="index.php/upload/video" method="POST" enctype="multipart/form-data"
      style="margin:15px 0" target="hidden_iframe">
                      
                           <div class = "fengmianL" id = "fengmianL3">
                              <p class = "secondP1">上传视频</p>
                              
                            </div>
                           
              
                              <input type="file" name="file2"/>
                               <button class = "up1">上传</button>
                            
                            <input type="hidden" name="" value="test" />
                         
                   
                   
                    </form>
                    <iframe id="hidden_iframe" name="hidden_iframe" src="about:blank" style="display:none;">
                      
                    </iframe>
                    <div id="progress" class="progress" style="margin-bottom:15px;display:none;">
                            <div class="bar" style="width:0%;"></div>
                            <div class="label">100%</div>
                    </div>
                    </li>

                         <script type="text/javascript">
    function fetch_progress(){
        $.get('progress.php',{ '' : 'test'}, function(data){
                var progress = parseInt(data);
                $('#progress .label').html(progress + '%');
                $('#progress .bar').css('width', progress + '%');
                if(progress < 100){
                        setTimeout('fetch_progress()', 100);
                }else{
            $('#progress .label').html('完成!');
                }
            }, 'html');
    }
    $('#upload-form').submit(function(){
        $('#progress').show();
        setTimeout('fetch_progress()', 100);
    });
</script>

                       <?php echo form_open_multipart('upload/do_upload'); ?>
                        <ul>  
                         <li  class = "secondRli" id = "secondRli2">                         
                           <div class = "biaotiL">
                              <p class = "secondP1">标题</p>
                              <p class = "secondP2">40字以内</p>
                              <p class = "secondP2">请尽量使用中文</p>
                              <p class = "secondP3">（必填）</p>
                            </div>
                            <div class = "biaotiR">
                              <input class = "secondIn1" type = "text" name="title">
                            </div>
                         </li>
                         <li  class = "secondRli" id = "secondRli2">                         
                           <div class = "biaotiL">
                              <p class = "secondP1">编号</p>
                               <p class = "secondP3">仅限填写数字或OVA</p>
                            </div>
                            <div class = "biaotiR">
                              <input class = "secondIn1" type = "text" name="pid">
                            </div>
                         </li>
                          <li  class = "secondRli" >                         
                           <div class = "beizhuL">
                              <p class = "secondP1">备注</p>
                              <p class = "secondP2">可填原名称</p>
                              <p class = "secondP2">请勿随意填写备注名</p>
                              <p class = "secondP2">（选填）</p>
                            </div>
                            <div class = "beizhuR">
                              <input class = "secondIn1" type = "text" name="message">
                            </div>
                         </li>
                         <li  class = "secondRli" >                         
                           <div class = "beizhuL">
                              <p class = "secondP1">隶属栏目</p>
                              <p class = "secondP2">请按号入座</p>
                              
                              <p class = "secondP3">（必填）</p>
                            </div>
                            <div class = "lishuR">
                              <select class = "secondSec1" name="column">
                                <option value ="1">请选择</option>
                                <option  value ="donghua">动画</option>
                                <option  value ="music">音乐</option>
                                <option  value ="game">游戏</option>
                                <option  value ="yule">娱乐</option>
                                <option  value ="dsj">电视剧</option>
                                <option  value ="bangumi" >番剧</option>
                                <option value ="moive" >电影</option>
                                <option  value ="tec">科技</option>
                                <option  value ="guichu">鬼畜</option>
                                <option  value ="fashion">时尚</option>
                              </select>
                              <select class = "secondSec2" name="type">
                              <option value="1">
                                  请选择
                              </option>>
                                <option value="series">连载动画</option>
                                <option value="over">完结动画</option>
                                <option value="news">资讯</option>
                                <option value="extend">官方延伸</option>
                                <option value="china">国产动画</option>
                                </select>

                              </select>
                            </div>
                         </li>
                          <li  class = "secondRli" id = "secondRli5">                         
                           <div class = "biaoqianL">
                              <p class = "secondP1">标签</p>
                              <p class = "secondP2">半角逗号隔开</p>
                              <p class = "secondP3">(必填)</p>
                            </div>
                            <div class = "biaoqianR">
                              <input class = "secondIn1" type = "text" name="tag" value="BILIBILI正版">
                              <div class = "zero">0/10</div>
                              <input type = "checkbox" class = "secondcheck">允许其他人增加
                              <div class = "biaoqian">
 <?php foreach ($todo_list->result() as $item):?>
    <label><input type="checkbox" name="vehicle[]" value="<?php echo $item->name;?>"/><?php echo $item->name;?></label> 
<?php endforeach;?>
                              </div>
                            </div>
                         </li>
                         <li  class = "secondRli" >                         
                           <div class = "beizhuL">
                              <p class = "secondP1">活动项目</p>
                              <p class = "secondP2">填写后不可修改，需要</p>
                              <p class = "secondP2">参加活动时选择</p>
                            </div>
                            <div class = "active">
                              <select class = "secondSec3">
                                <option>不参加任何活动</option>
                                <option>奥O卡最佳外语片大赛</option>
                              </select>                                                            
                            </div>
                         </li>
                         <li  class = "secondRli" >                         
                           <div class = "beizhuL">
                              <p class = "secondP1">投稿类型</p>
                              <p class = "secondP2">若非本人自制原创</p>
                              <p class = "secondP2">请勿选择自制</p>
                              <p class = "secondP3">（必填）</p>
                            </div>
                            <div class = "beizhuR">
                             <a href = "##"class = "secondBut1">转载</a> 
                             <a href = "##" class = "secondBut2">自制</a>
                             <a href = "##" class = "secondBut3">补档</a>
                            </div>
                         </li>
                         
                         <li  class = "secondRli" >                         
                           <div class = "beizhuL">
                              <p class = "secondP1">视频出处</p>
                              <p class = "secondP2">请填入来源/二次创作等</p>
                              <p class = "secondP2">Nico转载请注明sm号</p>
                              <p class = "secondP3">（必填）</p>
                            </div>
                            <div class = "beizhuR">
                              <input class = "secondIn2" type = "text" name="comefrom">
                            </div>
                         </li>
                         <li  class = "secondRli" id = "secondRli9">                         
                           <div class = "jianjieL">
                              <p class = "secondP1">简介</p>
                              <p class = "secondP2">200字以内</p>
                              <p class = "secondP2">分P备注不填</p>
                              <p class = "secondP2">则默认引用简介</p>
                              <p class = "secondP3">（必填）</p>
                            </div>
                            <div>
                              <textarea class = "jianjieR" name="summary"></textarea>
                            </div>
                         </li>
                         <!-- <li  class = "secondRli" id = "secondRli10">                         
                           <div class = "contL">
                              <p class = "secondP1">投稿内容</p>
                              <p class = "secondP2">多P模式按住</p>
                              <p class = "secondP2">列表项可拖动调整顺序</p>
                              <p class = "secondP2"><a href = "##">则默认引用简介</a></p>
                              
                              <p class = "secondP3">（必填）</p>
                              <p class = "secondP2"><a href = "##">代码模式</a></p>
                            </div>
                            <div class = "beizhuR">
                              <div class = "laiyuan">
                                <span class = "laiyuan1">来源</span>
                                <span class = "laiyuan1">视频源地址</span>
                                <span class = "laiyuan2">分P名（不填则默认）</span>
                                <span class = "laiyuan2">分P备注（选填，播放页优先显示备注）</span>
                                <span class = "laiyuan2">操作</span>
                              </div>
                              <div class = "laiyuanNext">
                                 <select class = "laiyuanNextsec">
                                    <option>选择</option>
                                    <option>直传</option>
                                 </select>
                                
                                 <input class = "laiyuanNextIn1">
                                 <input class = "laiyuanNextIn2">
                                 <textarea class = "laiyuanNextIn3"></textarea>
                                 <button>添加</button>
                              </div>
                            </div>
                         </li>   -->
                         <li class = "secondRli" id = "secondRendL">
                           <div class = "secondRendLD">
                             <p>★任何一名优秀的UP主，都应该拒绝投稿渣画质视频！★</p>
                             <p>本站所有投稿必须遵守《互联网电子公告服务管理规定》，不得发表诽谤他人；侵犯他人隐私；侵犯他人知识产权；传播病毒；政治言</p>
                             <p>论；商业讯息；低俗内容等信息，恶意违反规定者将导致您的账号被封停。</p>
                             <p>为了避免投稿视频撞车（即，视频重复）投稿前请仔细搜索有无您想投稿的视频。</p>
                             <p>如果您的投稿视频被退回,那么说明您投稿中的相关内容不完整或投稿代码模式没有按照范例的标准进行填写。</p>
                           </div>
                           <button>提交</button>
                         </li>  

                      </ul>                      
                    </form>
                  </div>
            </div>
         </div>
       </div>
       </div>
       
     </div>
     <script type="text/javascript" src = "resource/js/myself.js"></script>
 </body>