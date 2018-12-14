<?php
/*
Template Name Posts: 部门设计师departmentDesigner
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 5;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
    <!--模块列表-->

    <div class="topbannerFrame">
        <figure>
            <div class="find-company-topbanner">
                <img src="<?php bloginfo('template_directory'); ?>/images/com_background_6.jpg">
                <div class="find-company-logo">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/5bdd3ee8b256c.jpg" alt="<?php echo $title; ?>"></figure>
                </div>
                <h1><?php echo $title; ?></h1>
                <p>
                    服务客户
                    <span>&nbsp;<?php echo get_post_meta($page_id, '已签约', true); ?>360 </span>
                </p>
            </div>
        </figure>
    </div>

    <section class="clearfix">
        <div class="scoreframe">
            <div class="score" style="height: 63px;">
                <br>
                <p>人气</p>
                <span>2280<?php echo get_post_meta($page_id, '咨询客户', true); ?></span>
            </div>
            <div class="score-bar">

                <div class="clearfix">
                    <span>职  &nbsp;位:</span>
                    <span>设计总监<?php echo get_post_meta($page_id, '公司职务', true); ?></span>
                </div>

                <div class="clearfix">
                    <span>从业时间:</span>

                    <span>12年<?php echo get_post_meta($page_id, '工作经验', true); ?></span>
                </div>

                <div class="clearfix">
                    <span>所在部门:</span>
                    <span>余工设计师楼设计一部<?php echo get_post_meta($page_id, '工作经验', true); ?></span>
                </div>
                <div class="clearfix">

                    <span>擅长风格:</span>
                    <span>现代简约 欧式风格 中式风格 美式风<?php echo get_post_meta($page_id, 'design-style', true); ?></span>
                </div>

            </div>
        </div>
    </section>

    <nav></nav>


<div class="jwaterfall" style="opacity: 1">
    <?php $count = 0 ?>
    <?php if (have_posts()) : ?>
    <?php query_posts('cat='. $current_cat_ID. '&caller_get_posts=1&showposts=12'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php $count++ ?>
    <?php $post_id = $post->ID; ?>
    <div class="jwf-col left">
        <a href="<?php the_permalink(); ?>">
            <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                <?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
                <!-- <img src="<?php bloginfo('template_directory'); ?>/images/5853b57c71caf.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>"> -->
            </div>
            <p>
                <span class="jwf-star">5</span>
            </p>
            <span><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></span>
        </a>
    </div>
    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?> 
</div>

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