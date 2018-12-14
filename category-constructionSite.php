<?php get_header(); ?>
<?php
    // global $wp_query;
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;
    // echo $category->slug;
?>
    <!--模块列表-->
<?php $count = 0 ?>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<?php $count++ ?>
<?php $post_id = $post->ID; ?>
    <section class="g_wrap m_floor f_mb">

        <div class="inner">
            <a href="<?php the_permalink(); ?>" class="ad">
                <img src="<?php bloginfo('template_directory'); ?>/images/584f6c5beb9c4.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>"></a>

            <div class="list">
                <a href="<?php the_permalink(); ?>"> <strong><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></strong> <em>面积：<?php echo get_post_meta($post_id, 'acreage', true); ?>平米</em>
                    <br> <em>预算：<?php echo get_post_meta($post_id, 'budget', true); ?></em>
                    <br>
                    <em>已有<?php if(function_exists('the_views')) { the_views(); } ?>1906人查看了该楼盘</em>

                </a>

            </div>
        </div>

    </section>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?> 
    <div class="paging">
         <?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>      
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