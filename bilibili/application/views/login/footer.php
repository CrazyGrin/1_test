<div class="the-end">
        <div class="end-content">
            <div class="end-first">
                <span>Bilibili</span>
                <a href="#"><img src="resource/images/store.png" class="store"></a>
                <a href="#" class="about">关于我们</a>
                <a href="#" class="about">友情链接</a>
                <a href="#" class="about">联系我们</a>
                <a href="#" class="about">加入我们</a>
            </div>
            <div class="end-first" id="end-second">
                <span>帮助</span>
                
                <a href="#" class="help">帮助中心</a>
                <a href="#" class="help">补档认领处</a>
                <a href="#" class="help">侵权申诉</a>
                <a href="#" class="help">建议/BUG汇报</a>
            </div>
            <div class="end-first" id="end-third">
                <span>传送门</span>
              
                <a href="#" class="tall">高级弹幕</a>
                <a href="#" class="tall">名人堂</a>
                <a href="#" class="tall">活动专题页</a>
                <a href="#" class="tall" id="zi">资讯</a>
                <a href="#" class="tall">壁纸站</a>
                <a href="#" class="tall">分院帽计划</a>
                <a href="#" class="tall">活动中心</a>
            </div>
            <img src="resource/images/news.png" id="news">
            <div class="broadcast">
                <span>
                
                广播电视节目制作经营许可证：（沪）字第1248号
                网络文化经营许可证：沪网文[2013]0480-056号
                信息网络传播视听节目许可证：0910417
               </span>
               <a href="#" class="police">上海互联网举报中心</a>
            </div>
            <div class="IE">
                <span>互联网ICP备案：沪ICP备13002172号-3</span>
                <span>沪ICP证：沪B2-20100043</span>
                <span>违法不良信息举报邮箱：help@bilibili.com</span>
                <span>违法不良信息举报电话：4000233233 转 3</span>
            </div>
            <div class="last">
                <div class="down">
                     <a href="#"> 
                        <div id="down">                            
                        </div>
                      手机端下载
                    </a>
                 </div>
                <div class="sina">
                    <a href="#"> 
                        <div id="sina">                            
                        </div>
                        新浪微博  
                    </a>
                </div>
                <div class="weixin">
                    <a href="#"> 
                        <div id="weixin">                            
                        </div>
                       官方微信
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
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
</html>