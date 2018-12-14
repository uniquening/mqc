<?php get_header(); ?>
<?php
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;
?>		
  <!--模块列表-->

    <ul class="zxgl-index-modules-list">
        <!--装修日记模块-->

        <li class="zxgl-index-module zxgl-index-riji">

            <section class="zxgl-index-module-body">
                <!--日记列表-->
                <ul class="nl-note-list">
                    <?php $count = 0 ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php $count++ ?>
                    <?php $post_id = $post->ID; ?>
                     <li>
                        <a href="<?php the_permalink(); ?>">
                            <img class="nl-note-img lazy" data-original="/Websites/mifantuan/Uploads/Picture/2017-12-30/5a473b44aff4c.jpg" src="<?php bloginfo('template_directory'); ?>/images/5a473b44aff4c.jpg" width="600" height="340" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" style="display: block;">
                            <div class="nl-note-cover">
                                <h3>
                                    <span><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></span> <em></em>
                                </h3>
                                <p class="nl-note-summary"></p>

                                <p class="nl-note-info">
                                    浏览&nbsp; <em><?php if(function_exists('the_views')) { the_views(); } ?>281</em>
                                    &nbsp;
                                    <i>|</i>
                                    &nbsp;
                                    <!-- 评论 -->
                                    &nbsp;
                                    <em><!-- 180 --></em> 
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?> 
                </ul>
                <div class="paging">
                     <?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
                </div>
                <a class="zxgl-index-submodule" href="<?php echo home_url(); ?>">回到主页</a>
            </section>
        </li>

    </ul>

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