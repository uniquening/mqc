<?php
/*
Template Name Posts: 活动(activity)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 6;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
  <!--模块列表-->

    <article>
        <header>
            <h1>半包装修业主需要买哪些材料？</h1>
            <!-- <span>
            <a href="/detail/1014.html">行业新闻</a>
            |
        </span>
        -->
        <time><?php the_time('Y-m-d'); ?></time>
        <span>| 点击次数: <?php if(function_exists('the_views')) { the_views(); } ?>1169</span>
    </header>
    <div class="details">
        <p style="line-height:1.75em;margin-top:10px;">
            <span style="font-size:14px;"></span>
        </p>
    </div>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>

    <!-- <p>
        半包装修包人工和辅材，地板、卫浴等主材方面材料都是需要业主自行选购，常见装修方式除了半包外，还有全包和整装，相对半包而言，整体装修业主直接可以拎包入住，这几种装修方式各有各的优势，在资金不是很充裕的情况，很多业主都是在综合考虑后选择半包装修，那到底半包装修需要购买哪些材料呢?答案马上揭晓。
    </p>
    <p>
        主材部分是整个装修过程中成本的大头部分，所以很多业主更渴望自行在建材卖场里面选购自己最心仪的产品，而且相对来说自购的选择性更好，装修预算也可以自行控制。
        <br>
        具体主材部分包括地板、洁具、瓷砖、地板等。
        <br> <strong>自购主材主要有：</strong>
        <br>
        1、马桶+面盆柜+水龙头+配件
        <br>
        2、立柱盆+水龙头及配件
        <br>
        3、整体橱柜
        <br>
        4、油烟机及灶具
        <br>
        5、水槽
        <br>
        6、热水器
        <br>
        7、淋浴隔断+挡水条
        <br>
        8、淋浴花洒
        <br>
        9、地漏
        <br>
        10、门槛石
        <br>
        11、窗台石
        <br>
        12、镜框用马赛克
        <br>
        13、瓷砖
        <br>
        14、拖把池
        <br>
        15、集成吊顶+灯具+浴霸
        <br>
        16、封阳台
        <br>
        17、木塑门+门套
        <br>
        18、地板
        <br>
        19、地膜+踢脚线
        <br>
        20、窗帘轨道+窗帘
        <br>
        21、灯具
        <br>
        22、卫浴五金件
        <br>
        23、墙纸+基膜
        <br>
        24、卫生间防水盒
        <br>25、开关插座</p>
    <p>
        <br></p>
    <p>
        <img src="<?php bloginfo('template_directory'); ?>/images/59ab69363440e.jpg" alt=""></p>
    <p>
        <br> <strong></strong>
        <strong>自购家具主要有：</strong>
        <br>
        1、搁物架
        <br>
        2、单人沙发+双人沙发+组合沙发
        <br>
        3、床+床头柜+衣柜+鞋柜
        <br>
        4、床垫
        <br>
        5、餐桌椅
        <br>
        6、茶几+茶几毯
        <br>
        7、晾衣架
        <br>8、电脑桌</p>
    <p>
        <br>
        <strong>自购家电主要有：</strong>
        <br>
        1、电视机
        <br>
        2、冰箱
        <br>
        3、空调
        <br>
        4、吸尘器
        <br>5、热水器</p>
    <p>总结：在选择主材家具及家电的时候一定要在正规卖场选择正规的品牌产品，切忌在小卖场选购大件产品，在性价比上面是比较低的。</p> -->
</article>

<!-- <li>
    上一篇：
    <a href="http://m.nnxyzs.com/detail/1007.html">最烧钱的卫生间，你家可装出效果了？</a>
</li>
<li>
    下一篇：
    <a href="http://m.nnxyzs.com/detail/1019.html">小户型装修怎么使用榻榻米</a>
</li> -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <li>
        <span class="prev"><?php if (get_previous_post()) { previous_post_link('上一篇：%link'); }  ?></span>
    </li>
    <li>
        <span class="next"><?php if (get_next_post()) { next_post_link('下一篇：%link'); } ?></span>
    </li>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<section class="zx-wtg-wrap">
    <!-- <i class="zx-wtg-logo"></i>
-->
<i href="www.nnxyzs.com" style="position:absolute;top:6px;left:2px;"><img src="<?php bloginfo('template_directory'); ?>/images/5a20b98776db9.png" width="90" height="32"></i>

<h2>关注 星艺装饰南宁公司官网微信，领装修大礼包</h2>
<p>
    打开微信，关注微信号： <em></em>
</p>
</section>
<script type="text/javascript">
        window._bd_share_config = {
            share : [{
                bdCustomStyle : 'http://img.to8to.com/wap/v2/share-icon.png'
            }]
        };
    </script>

</section>

<style>
    .left-whan {
        position: fixed;
        bottom: 15px;
        left: 0;
        z-index:10;
    }
    .left-whan img {
        width: 80px;
    }
</style>

<!-- /主体 -->

<?php get_footer(); ?>