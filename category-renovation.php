<!-- 装修案例模板 -->
<?php get_header(); ?>
<?php
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;
?>
   <!--模块列表-->

    <!--风格  循环  开始 -->

    <ul id="menu">

        <li>
            <span class="current-condition">风格</span>
            <i class="icon-arrow"></i>
            <div class="submenu">
                <ul class="clearfix ">
                    <?php 
                        $qfl_cur_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
                        $designstyle = 'designstyle';
                        $housetype = 'housetype';
                        $area = 'area';
                        $budget = 'budget';

                        
                        if (strpos($qfl_cur_uri, $designstyle) !== false) {
                            $qfl_cur_uri = $qfl_cur_uri;
                        } else {
                            $qfl_cur_uri .= '&designstyle=0&housetype=0&area=0&budget=0';
                        }
                    ?>
                    <?php
                        $terms = get_terms("designstyle");
                        $num = 0;
                        $count = count($terms);
                        $reg = '/'. $designstyle .'\=\w+/';
                        $qfl_cur_uri = preg_replace($reg, $designstyle . '=0', $qfl_cur_uri);
                        echo '<li><a href="' . $qfl_cur_uri  .'" class="needsclick">全部</a> </li> ';
                        if ( $count > 0 ){
                            foreach ( $terms as $term ) {
                                $cur_slug = $term->slug;
                                $reg = '/'. $designstyle .'\=\w+/';
                                $qfl_cur_uri = preg_replace($reg, $designstyle . '=' . $cur_slug, $qfl_cur_uri);
                                echo '<li><a href="'. $qfl_cur_uri . '" class="needsclick">' . $term->name . ' </a></li> ';

                            }
                        }
                    ?>  
                </ul>
            </div>
        </li>
        <li>
            <span class="current-condition">户型</span>
            <i class="icon-arrow"></i>
            <div class="submenu">
                <ul class="clearfix ">
                    <?php
                        $terms = get_terms("housetype");
                        $num = 0;
                        $count = count($terms);
                        $reg = '/'. $housetype .'\=\w+/';
                        $qfl_cur_uri = preg_replace($reg, $housetype . '=0', $qfl_cur_uri);
                        echo '<li><a href="' . $qfl_cur_uri  .'" class="needsclick">全部</a></li> ';
                        if ( $count > 0 ){
                            foreach ( $terms as $term ) {
                                $cur_slug = $term->slug;
                                $reg = '/'. $housetype .'\=\w+/';
                                $qfl_cur_uri = preg_replace($reg, $housetype . '=' . $cur_slug, $qfl_cur_uri);
                                echo '<li><a href="'. $qfl_cur_uri . '" class="needsclick">' . $term->name . ' </a></li> ';

                            }
                        }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <span class="current-condition">面积</span>
            <i class="icon-arrow"></i>
            <div class="submenu">
                <ul class="clearfix ">
                    <?php
                        $terms = get_terms("acreage");
                        $num = 0;
                        $count = count($terms);
                        $reg = '/'. $acreage .'\=\w+/';
                        $qfl_cur_uri = preg_replace($reg, $acreage . '=0', $qfl_cur_uri);
                        echo ' <li><a href="' . $qfl_cur_uri  .'" class="needsclick">全部</a></li>';
                        if ( $count > 0 ){
                            foreach ( $terms as $term ) {
                                $cur_slug = $term->slug;
                                $reg = '/'. $acreage .'\=\w+/';
                                $qfl_cur_uri = preg_replace($reg, $acreage . '=' . $cur_slug, $qfl_cur_uri);
                                echo ' <li><a href="'. $qfl_cur_uri . '" class="needsclick">' . $term->name . ' </a></li>';

                            }
                        }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <span class="current-condition">造价</span>
            <i class="icon-arrow"></i>
            <div class="submenu">
                <ul class="clearfix ">
                    <?php
                        $terms = get_terms("budget");
                        $num = 0;
                        $count = count($terms);
                        $reg = '/'. $budget .'\=\w+/';
                        $qfl_cur_uri = preg_replace($reg, $budget . '=0', $qfl_cur_uri);
                        echo '<li><a href="' . $qfl_cur_uri  .'" class="needsclick">全部</a> </li> ';
                        if ( $count > 0 ){
                            foreach ( $terms as $term ) {
                                $cur_slug = $term->slug;
                                $reg = '/'. $budget .'\=\w+/';
                                $qfl_cur_uri = preg_replace($reg, $budget . '=' . $cur_slug, $qfl_cur_uri);
                                echo '<li><a href="'. $qfl_cur_uri . '" class="needsclick">' . $term->name . ' </a> </li> ';

                            }
                        }
                    ?>
                </ul>
            </div>
        </li>

    </ul>

    <!--风格  循环  结束 -->

    <div id="overlay"></div>

    <div class="jwaterfall" style="opacity: 1;" data-url="">

        <!--内容循环  开始-->
        <?php $count = 0 ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $count++ ?>
        <?php $post_id = $post->ID; ?>
        <div class="jwf-col left">

            <a href="<?php the_permalink(); ?>">
                <div class="wf-img-wrap" style="padding: 33.3% 0px;">
                    <img src="<?php bloginfo('template_directory'); ?>/images/595df94db975e.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>"></div>
                <p>
                    <span class="jwf-star">5</span>
                </p>
                <span><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></span>
            </a>

        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?> 


        <div class="paging">
             <?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
        </div>
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