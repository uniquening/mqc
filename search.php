<?php get_header(); ?>
    <div class="jwaterfall" style="opacity: 1;" data-url="/Public/static/images/nopic.gif">

        <!--内容循环  开始-->
        <?php $count = 0; ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $count++ ?>
         <div class="jwf-col left">

            <a href="<?php the_permalink(); ?>">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                	<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
                    <!-- <img src="./搜索页关键词：楼_files/5923f66ebbde2.jpg" alt="" title="星艺余工设计师楼"> -->
                </div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></span>
            </a>

        </div>       
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
<!--         <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/892.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5923f66ebbde2.jpg" alt="" title="星艺余工设计师楼"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>星艺余工设计师楼</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/888.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/591e6bde6185b.jpg" alt="" title="中青旅行社南宁公司办公楼装修案例"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>中青旅行社南宁公司办公楼装修案例</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/876.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5916b2d1a5923.jpg" alt="" title="百色恒升水岸售楼部"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>百色恒升水岸售楼部</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/878.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5917d01b527f7.jpg" alt="" title="北海穗丰金湾售楼部"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>北海穗丰金湾售楼部</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/884.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/591bc02947e9c.jpg" alt="" title="劲达兴纸业办公大楼案例"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>劲达兴纸业办公大楼案例</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/1000.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5985970b3f86b.jpg" alt="" title="穿楼层排水立管防水处理工艺"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>穿楼层排水立管防水处理工艺</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/1139.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5a5c5a1e93bea.jpg" alt="" title="大自然花园260平楼中楼装修案例"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>大自然花园260平楼中楼装修案例</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/1081.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5a13db59edb3a.jpg" alt="" title=" 复式楼装修注意事项有哪些？"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>复式楼装修注意事项有哪些？</span>
            </a>

        </div>
        <div class="jwf-col left">

            <a href="http://m.nnxyzs.com/detail/1407.html">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="./搜索页关键词：楼_files/5b74ef29bec0e.jpg" alt="" title="园中楼180平装修案例"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span>园中楼180平装修案例</span>
            </a>

        </div> -->
        <div class="paging">
             <?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
        </div>
<!--         <div class="paging">
            <ul class="paging_ul">
                <li class="total">
                    <a>共 <?php echo $count; ?> 条</a>
                </li>
            </ul>
        </div> -->
        <!--内容循环  结束--> </div>

    <style>
    /*20150724*/
    .whan-ad {
        background: rgba(0, 0, 0, 0.7);
        height: 53px;
        position: fixed;
        bottom: 0;
        width: 100%;
        padding-left: 75px;
        z-index:10;}
    .whan-ad div {
        position: relative; }
    .whan-ad div img {
        position: absolute;
        margin-left: -60px;
        margin-top: -49px;
        width: 55px; }
    .whan-ad div h1 {
        font-size: 16px;
        font-weight: bolder;
        color: #ffe400;
        font-family: "Arial" , "Microsoft YaHei";
        margin-top: 12px;
        margin-bottom: 2px; }
    .whan-ad div h2 {
        font-size: 12px;
        color: #fff; }
    .whan-ad div h3 {
        background: #ffe400;
        width: 36%;
        height: 32px;
        font-size: 14px;
        border-radius: 4px;
        position: absolute;
        right: 16px;
        top: -1px;
        color: #fff;
        text-align: center;
        line-height: 32px; }
    .whan-ad div h3 a{
        color:#000;}
    </style>

    <script type="text/javascript" src="./搜索页关键词：楼_files/to8to.min.js.下载"></script>

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