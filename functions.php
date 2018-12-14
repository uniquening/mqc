<?php
add_filter( 'show_admin_bar', '__return_false' );
//自定义菜单
register_nav_menus(
    array(
        'header-menu' => __( '顶部菜单' ),
        'server-menu' => __( '服务流程菜单' ),
        'mobile-menu' => __('手机菜单'),
        'search-menu' => __('搜索菜单')
    )
);

// 增加友情链接菜单
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

//小工具调用


if ( function_exists('register_sidebar') )
register_sidebar(array(
    'name'=>'sidebar1',
    'before_widget' => '<div class="sidebox"><div class="dikuanglan-2_yi">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
register_sidebar(array(
    'name'=>'footer1',
    'before_widget' => '<div class="sidebox">',
    'after_widget' => '</div>',
    'before_title' => '<div>',
    'after_title' => '</div>',
));

//文章页和分类页的S根分类的中英文
function qfl_show_cat_id_slug($id) {
    $cur_par_cat_ID = $id;
    $cur_par_cat = get_category($cur_par_cat_ID);
    $cur_par_cat_slug = $cur_par_cat->slug;
    $cur_par_cat_slug = strtoupper($cur_par_cat_slug);
    $cur_par_cat_name = get_cat_name($cur_par_cat_ID);
    echo '<span style="font-size:40px;color:#fff;font-weight:blod;">'. $cur_par_cat_slug . '</span>';
    echo '<span style="font-size:30px;color:#fff;">' . $cur_par_cat_name . '</span>';
}

//支持外链缩略图
if ( function_exists('add_theme_support') )
    add_theme_support('post-thumbnails');
function catch_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if(empty($first_img)){ //Defines a default image
        $random = mt_rand(1, 2);
        echo get_bloginfo ( 'stylesheet_directory' );
        echo '/images/random/'.$random.'.jpg';
    }
    return $first_img;
}
//获取设计师作品链接和标题
function qfl_catch_works_link($num, $post_id) {
    $works_id  = get_post_meta($post_id, 'works_id', false);
    $link = get_post($works_id[$num])->guid; 
    echo $link;                     
}
function qfl_catch_works_title($num, $post_id) {
    $works_id  = get_post_meta($post_id, 'works_id', false);
    echo get_post($works_id[$num])->post_title;                      
}
//获取分类链接和标题



//自定义文章类型
// 搜索关键字 register_taxonomy
// add_action( 'init', 'qfl_create_area' );//wordpress初始化
// function qfl_create_area() {
//     $labels = array(
//         'name' => _x( '地区', '产品应用的行业选项' ),
//         'singular_name' => _x( 'area', '行业名称' ),
//         'search_items' =>  __( '地区搜索' ),
//         'all_items' => __( '全部地区' ),
        
        
//         'edit_item' => __( '修改地区' ),
//         'update_item' => __( '更新地区' ),
//         'add_new_item' => __( '增加新的地区' ),
//         'new_item_name' => __( '新地区名字' ),
//     );
 
//     register_taxonomy('area','post',array(
//         'hierarchical' => True,
//         'labels' => $labels
//     ));
// }
// add_action( 'init', 'qfl_create_construction_site' );
// function qfl_create_construction_site() {
//     $labels = array(
//         'name' => _x( '施工进度', '筛选' ),
//         'singular_name' => _x( 'consite', 'taxonomy singular name' ),
//         'search_items' =>  __( '施工进度搜索' ),
//         'all_items' => __( '全部施工进度' ),
     
//         'edit_item' => __( '修改施工进度分类' ),
//         'update_item' => __( '更新施工进度分类' ),
//         'add_new_item' => __( '增加施工进度分类' ),
//         'new_item_name' => __( '新施工进度名字' ),
//     );
 
//     register_taxonomy('consite','post',array(
//         'hierarchical' => True,
//         'labels' => $labels
//     ));

// }

// add_action( 'init', 'qfl_create_house_style' );
// function qfl_create_house_style() {
//     $labels = array(
//         'name' => _x( '户型', '筛选' ),
//         'singular_name' => _x( 'housetype', 'taxonomy singular name' ),
//         'search_items' =>  __( '户型搜索' ),
//         'all_items' => __( '全部户型' ),
     
//         'edit_item' => __( '修改户型分类' ),
//         'update_item' => __( '更新户型分类' ),
//         'add_new_item' => __( '增加户型分类' ),
//         'new_item_name' => __( '新户型名字' ),
//     );
 
//     register_taxonomy('housetype','post',array(
//         'hierarchical' => True,
//         'labels' => $labels
//     ));

// }
// add_action( 'init', 'qfl_create_design_style' );
// function qfl_create_design_style() {
//     $labels = array(
//         'name' => _x( '风格', '筛选' ),
//         'singular_name' => _x( 'designstyle', 'taxonomy singular name' ),
//         'search_items' =>  __( '风格搜索' ),
//         'all_items' => __( '全部风格' ),
     
//         'edit_item' => __( '修改风格分类' ),
//         'update_item' => __( '更新风格分类' ),
//         'add_new_item' => __( '增加风格分类' ),
//         'new_item_name' => __( '新风格名字' ),
//     );
 
//     register_taxonomy('designstyle','post',array(
//         'hierarchical' => True,
//         'labels' => $labels
//     ));

// }

// add_action( 'init', 'qfl_create_acreage' );
// function qfl_create_acreage() {
//     $labels = array(
//         'name' => _x( '面积', '筛选' ),
//         'singular_name' => _x( 'acreage', 'taxonomy singular name' ),
//         'search_items' =>  __( '面积搜索' ),
//         'all_items' => __( '全部面积' ),
     
//         'edit_item' => __( '修改面积分类' ),
//         'update_item' => __( '更新面积分类' ),
//         'add_new_item' => __( '增加面积分类' ),
//         'new_item_name' => __( '新面积名字' ),
//     );
 
//     register_taxonomy('acreage','post',array(
//         'hierarchical' => True,
//         'labels' => $labels
//     ));

// }



// add_action( 'init', 'qfl_create_budget' );
// function qfl_create_budget() {
//     $labels = array(
//         'name' => _x( '造价', '筛选' ),
//         'singular_name' => _x( 'budget', 'taxonomy singular name' ),
//         'search_items' =>  __( '造价搜索' ),
//         'all_items' => __( '全部造价' ),
     
//         'edit_item' => __( '修改造价分类' ),
//         'update_item' => __( '更新造价分类' ),
//         'add_new_item' => __( '增加造价分类' ),
//         'new_item_name' => __( '新造价名字' ),
//     );
 
//     register_taxonomy('budget','post',array(
//         'hierarchical' => True,
//         'labels' => $labels
//     ));

// }




?>