<!-- 底部 -->
<div class="fix-nav" id="fix-nav">
<div class="fix-nav-wrap">
<img class="i-totop" src="<?php bloginfo('template_directory'); ?>/images/to_top.png">
<p>置顶</p>
</div>
</div>
<script type="text/javascript">
        jQuery(function($){
            $(window).bind("scroll",function() { 
                initScroll() 
            });

            var $fixnav = $('#fix-nav');
            function initScroll()
            {
                if ($(window).scrollTop() > $(window).height()/4) {
                    $fixnav.show();
                } else {
                    $fixnav.hide();
                }
            }

            $('.fix-nav-wrap').bind('click', function(e){
                $(window).scrollTop(0);
            });
        });
        

    </script>

<div class="pg-ft">
<ul class="terminal-nav">

<li>
<a class="active" href="<?php echo home_url(); ?>">回到首页</a>
</li>
<li>
<span class="i-sep"></span>
<a href="<?php echo get_category_link(7); ?>">装修案例</a>
</li>
<li>
<span class="i-sep"></span>
<a href="<?php echo get_permalink(94); ?>">公司简介</a>
<span class="i-sep"></span>
</li>
</ul>

<div class="company-info" style="text-align:center">&nbsp;桂ICP备17002251号</div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.min.js"></script>

<!--底部悬浮窗口  -->
<style>
.foot-fix {width: 100%;height: 50px;z-index: 999;bottom: 0px;position: fixed;font-size: 14px;background: #343434;line-height: 16px;}
.foot-fix li{list-style:none;width:25%;text-align:center;font-family:"微软雅黑";float:left;}
.foot-fix li p{color:#FFF;}
.foot-fix a{display: block;padding-top: 3px;}
.foot-fix a:hover,.foot-fix a.on{background-color: #e70;height: 65px;}
.foot-fix a img {width:26px; height:26px}
</style>
<div class="foot-fix">
<ul>
<li>
<a href="<?php echo home_url(); ?>" class="on">
<img src="<?php bloginfo('template_directory'); ?>/images/1f.png" alt="首页">
<p>首页</p>
</a>
</li>
<li>
<a href="<?php echo home_url(); ?>/#for">
<img src="<?php bloginfo('template_directory'); ?>/images/2f.png" alt="申请报价">
<p>申请报价</p>
</a>
</li>
<li>
<a href="http://p.qiao.baidu.com/cps2/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sessionid%22%3A%22%22%2C%22siteId%22%3A%227984991%22%2C%22tid%22%3A%22-1%22%2C%22userId%22%3A%2210666589%22%2C%22ttype%22%3A1%7D">
<img src="<?php bloginfo('template_directory'); ?>/images/3f.png" alt="在线咨询">
<p>在线咨询</p>
</a>
</li>
<li>
<a href="tel:0771-5596299">
<img src="<?php bloginfo('template_directory'); ?>/images/4f.png" alt="电话预约">
<p>电话预约</p>
</a>
</li>
</ul>
</div>
<!--底部悬浮窗口  -->

 <script>
// var _hmt = _hmt || [];
// (function() {
//   var hm = document.createElement("script");
//   hm.src = "//hm.baidu.com/hm.js?0ecbee183820699325b15374bf2d9ec3";
//   var s = document.getElementsByTagName("script")[0];
//   s.parentNode.insertBefore(hm, s);
// })();
 </script>
<!-- /底部 -->
<!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/150572.js" async="" defer=""></script>_-->

<div id="alertOveryLayer" style="position: fixed; left: 0px; top: 0px; z-index: 99999; text-align: center; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.298); display: none;">
<div style="  position: absolute;display: -moz-box;  display: -webkit-box;  display: -webkit-flex;  display: -moz-flex;  display: -ms-flexbox;  display: -ms-flex;  display: flex;top: 30%;width: 100%;">
<div class="alert-lay" style="/* display: table-cell; */vertical-align: middle;padding: 0 10%;-webkit-box-sizing: border-box;  -moz-box-sizing: border-box;  box-sizing: border-box;  display: block;  -webkit-box-flex: 1;  -moz-box-flex: 1;  -webkit-flex: 1 1 0;  -moz-flex: 1 1 0;  -ms-flex: 1 1 0;  flex: 1 1 0;  text-align: center;">
<div class="overlay-bd" style="background-color: #fff;font-size: 14px;color: #333333;line-height: 24px;padding: 20px 15px;text-align: center;border-radius: 7px 7px 0 0;">asdf</div>
<div class="overlay-foot" style="border-top: 1px solid #e3e3e3;">
<div class="overlay-btn overlay-btn-ok" style="background-color: #fff;cursor: pointer;font-size: 16px;color: #00a1ff;height: 42px;line-height: 42px;border-radius: 0 0 7px 7px;">好的</div>
</div>
</div>
</div>
</div> <ins id="newBridge"><!-- target: invitebox --> <ins class="nb-invite-wrap-base nb-invite-wrap-0 mobile-invite-bottom" id="nb_invite_wrap" style="min-height:162.40000000000003px;display:none;"><!-- // = 3 为高级定制 -->
<ins class="nb-invite-tool-base nb-invite-tool" id="nb_invite_tool">×</ins>
<ins class="nb-invite-body-base nb-invite-body">
<ins class="nb-invite-welcom nb-show">感谢访问星艺装饰南宁官网。售后质保2年 水电10年 家住南宁不看星艺不装修 0771-5596299</ins>
<ins class="nb-invite-btns">
<ins class="nb-invite-ok" id="nb_invite_ok">现在咨询</ins>
<ins class="nb-invite-no" id="nb_invite_cancel">稍后再说</ins></ins> </ins> 
</ins>
<!-- end -->
</ins>
<iframe name="411671" height="0" width="0" src="<?php bloginfo('template_directory'); ?>/html/mv.html" style="display: none;"></iframe>
<style>
    a.last, a.first, span.pages {
        display: none!important;
    }


</style>
</body>
</html>