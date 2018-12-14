<?php get_header(); ?>
<?php
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;
?>	
    <!--模块列表-->

    <!--风格  循环  开始 -->

    <ul id="menu"></ul>

    <!--风格  循环  结束 -->

    <div id="overlay"></div>

    <div class="jwaterfall" style="opacity: 1;" data-url="/Public/static/images/nopic.gif">
        <?php $count = 0 ?>
        <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
        <?php $count++ ?>
        <?php $post_id = $post->ID; ?>
            <div class="jwf-col left">

                <a href="http://m.nnxyzs.com/detail/424.html">
                    <div class="wf-img-wrap" style="padding: 33.3% 0px; background-color: rgb(156, 181, 212);">
                        <img src="<?php bloginfo('template_directory'); ?>/images/5863709f9b9ba.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 23,''); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 23,''); ?>"></div>
                    <p>
                        <span class="jwf-star">5</span>
                    </p>
                    <span><?php echo mb_strimwidth(get_the_title(), 0, 23,''); ?></span>
                </a>

            </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?> 

        <!--内容循环  结束--> 
    </div>

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

    <!-- <script type="text/javascript" src="/Websites/mifantuan/Templates/mftm/Static/js/iscroll.min.js"></script>
-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/to8to.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/150572.js" async="" defer=""></script>

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