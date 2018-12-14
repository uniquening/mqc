<?php
/*
Template Name Posts: 合作品牌(Cooperative Brand)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 67;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>

<?php get_header(); ?>
 <!--模块列表-->

    <!--风格  循环  开始 -->

    <ul id="menu"></ul>

    <!--风格  循环  结束 -->

    <div id="overlay"></div>

    <div class="jwaterfall" style="opacity: 1;" data-url="/Public/static/images/nopic.gif">
        <?php 
            $imageSrc =  get_post_meta($page_id, 'imageSrc', false); 
            $imageTitle =  get_post_meta($page_id, 'imageTitle', false); 
            for ($i = 0; $i < count($imageSrc); ++$i) {
        ?>
        <div class="jwf-col left">

            <a href="javascript:;">
                <div class="wf-img-wrap" style="padding: 33.3% 0px; background-color: rgb(156, 181, 212);">
                    <img style="height: 100%"src="<?php echo $imageSrc[$i]; ?>" alt="<?php echo $imageTitle[$i]; ?>" title="<?php echo $imageTitle[$i]; ?>"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span><?php echo $imageTitle[$i]; ?></span>
            </a>

        </div>

        
        <?php        
            }
        ?>
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

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/to8to.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/150572.js" async="" defer=""></script>

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