<?php
/*
Template Name Posts: 赞誉与肯定(praise affirmation)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 66;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
   <!--模块列表-->

	<article>
	    <header>
	        <h1><?php wp_title(''); ?></h1>
	        <time><?php the_time('Y-m-d'); ?></time>
	        <span>| 点击次数：v<?php if(function_exists('the_views')) { the_views(); } ?></span>
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

	    <p>半岛半山业主送来锦旗，项目经理李宁接受锦旗，锦旗内容：星艺装饰 值得信赖 工艺精湛 认真负责</p>
	    <p>
	        <br></p>
	    <p>
	    <img src="<?php bloginfo('template_directory'); ?>/images/5bf7c004b7036.jpg" alt=""></p>
	</article>

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
	<i href="<?php echo home_url(); ?>" style="position:absolute;top:6px;left:2px;"><img src="<?php bloginfo('template_directory'); ?>/images/5a20b98776db9.png" width="90" height="32"></i>

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