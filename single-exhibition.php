<?php
/*
Template Name Posts: 展厅(exhibitionHall)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->
slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 60;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
	<!--模块列表-->

	<h1 class="keTitle">星艺主材展厅</h1>
	<div class="kePublic">
		<!--效果html开始-->	
		<div class="page wrapper main-wrapper">
			<div class="row clearfix">
				<div id="page-navigation" class="col span_6">
					<div class="left page-nav-item"></div>
					<div class="right page-nav-item"></div>
				</div>
			</div>
		</div>
		<div class="sliderContainer fullWidth clearfix">

			<div id="full-width-slider" class="royalSlider heroSlider rsMinW rsHor rsWebkit3d rsWithBullets" style="height: 136.719px;">
				<div class="rsOverflow grab-cursor" style="width: 375px; height: 300px;">
					<div class="rsContainer" style="transition-duration: 0ms; transform: translate3d(-1531px, 0px, 0px); transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);">
						<div style="left: 0px;" class="rsSlide ">
							<div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
								<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>/images/58257b617cce0.jpg" style="width: 618px; height: 300px; margin-left: -122px; margin-top: 0px;">
								<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: block; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-property: -webkit-transform, opacity; transition-duration: 200ms; transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);">
									<!--  <h4>	
									This is an animated block, add any number of them to any type of slide
								</h4>
								-->
								<p>人气：1335</p>
								</div>
							</div>
						</div>
						<div style="left: 383px;" class="rsSlide ">
							<div class="rsContent">
								<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>	
								/images/58257b61e96a7.jpg" style="width: 618px; height: 300px; margin-left: -122px; margin-top: 0px;">
								<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
									<!--  <h4>	
									This is an animated block, add any number of them to any type of slide
								</h4>
								-->
									<p>人气：1335</p>
								</div>
							</div>
						</div>
						<div style="left: 766px;" class="rsSlide ">
						<div class="rsContent">
							<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>	
							/images/58257b62356ab.jpg" style="width: 618px; height: 300px; margin-left: -122px; margin-top: 0px;">
							<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
								<!--  <h4>	
								This is an animated block, add any number of them to any type of slide
							</h4>
							-->
								<p>人气：1335</p>
							</div>
						</div>
						</div>
						<div style="left: 1149px;" class="rsSlide ">
							<div class="rsContent">
								<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>	
								/images/58257b6263115.jpg" style="width: 618px; height: 300px; margin-left: -122px; margin-top: 0px;">
								<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
									<!--  <h4>	
									This is an animated block, add any number of them to any type of slide
								</h4>
								-->
									<p>人气：1335</p>
								</div>
							</div>
						</div>
						<div style="left: 1532px;" class="rsSlide ">
							<div class="rsContent">
								<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>	
								/images/58257b629400f.jpg" style="width: 618px; height: 300px; margin-left: -122px; margin-top: 0px;">
								<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
									<!--  <h4>	
									This is an animated block, add any number of them to any type of slide
								</h4>
								-->
									<p>人气：1335</p>
								</div>
							</div>
						</div>
						<div style="left: 1915px;" class="rsSlide ">
							<div class="rsPreloader"></div>
						</div>
					</div>
				</div>
			<div class="rsNav rsBullets">
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet rsNavSelected">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
				<div class="rsNavItem rsBullet">
					<span></span>
				</div>
			</div>
			<div class="rsArrow rsArrowLeft" style="display: block;">
				<div class="rsArrowIcn"></div>
			</div>
			<div class="rsArrow rsArrowRight" style="display: block;">
				<div class="rsArrowIcn"></div>
			</div>
			<div class="rsGCaption"></div>
			</div>
		</div>

<!-- <li>
上一篇：
<a href="http://m.nnxyzs.com/detail/424.html">主材展厅之橱柜</a>
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

<script>
  jQuery(document).ready(function($) {
	  $('#full-width-slider').royalSlider({
	    arrowsNav: true,
	    loop: false,
	    keyboardNavEnabled: true,
	    controlsInside: false,
	    imageScaleMode: 'fill',
	    arrowsNavAutoHide: false,
	    autoScaleSlider: true, 
	    autoScaleSliderWidth: 960,     
	    autoScaleSliderHeight: 350,
	    controlNavigation: 'bullets',
	    thumbsFitInViewport: false,
	    navigateByClick: true,
	    startSlideId: 0,
	    autoPlay: false,
	    transitionType:'move',
	    globalCaption: true,
	    deeplinking: {
	      enabled: true,
	      change: false
	    },

	    imgWidth: 1400,
	    imgHeight: 680
	  });
	});
</script>
<!--效果html结束-->
<div class="clear"></div>
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