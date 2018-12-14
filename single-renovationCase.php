<?php
/*
Template Name Posts: 装修案例renovation case
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 4;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
<!--模块列表-->

	<h1 class="keTitle">华发国宾一号240平装修案例</h1>
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
			<div id="full-width-slider" class="royalSlider heroSlider rsMinW rsHor rsWebkit3d rsWithBullets" style="height: 175.781px;">
				<div class="rsOverflow grab-cursor" style="width: 375px; height: 300px;">
					<div class="rsContainer" style="transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
						<div style="left: 0px;" class="rsSlide ">
							<div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">

								<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>/images/595df90c4ba9f.jpg" style="width: 330px; height: 292px; margin-left: 22px; margin-top: 4px;">
								<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: block; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-property: -webkit-transform, opacity; transition-duration: 200ms; transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);">
									<!--  <h4>
									This is an animated block, add any number of them to any type of slide
								</h4>
								-->
								<p>华发国宾一号240平装修案例</p>
							</div>

						</div>
					</div>
					<div style="left: 383px;" class="rsSlide ">
						<div class="rsContent">

							<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>/images/595df90cca6b9.jpg" style="width: 329px; height: 292px; margin-left: 23px; margin-top: 4px;">
							<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
								<!--  <h4>
								This is an animated block, add any number of them to any type of slide
							</h4>
							-->
							<p>华发国宾一号240平装修案例</p>
						</div>

					</div>
				</div>
				<div style="left: 766px;" class="rsSlide ">
					<div class="rsContent">

						<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>/images/595df90d17eaa.jpg" style="width: 367px; height: 249px; margin-left: 4px; margin-top: 25px;">
						<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
							<!--  <h4>
							This is an animated block, add any number of them to any type of slide
						</h4>
						-->
						<p>华发国宾一号240平装修案例</p>
					</div>

				</div>
			</div>
			<div style="left: 1149px;" class="rsSlide ">
				<div class="rsContent">

					<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>/images/595df90d89426.jpg" style="width: 367px; height: 248px; margin-left: 4px; margin-top: 26px;">
					<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
						<!--  <h4>
						This is an animated block, add any number of them to any type of slide
					</h4>
					-->
					<p>华发国宾一号240平装修案例</p>
				</div>

			</div>
		</div>
		<div style="left: 1532px;" class="rsSlide ">
			<div class="rsContent">

				<img class="rsImg rsMainSlideImage" src="<?php bloginfo('template_directory'); ?>/images/595df90dc7d6b.jpg" style="width: 367px; height: 248px; margin-left: 4px; margin-top: 26px;">
				<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200" style="display: none;">
					<!--  <h4>
					This is an animated block, add any number of them to any type of slide
				</h4>
				-->
				<p>华发国宾一号240平装修案例</p>
			</div>

		</div>
	</div>
</div>
</div>
<div class="rsNav rsBullets">
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
<div class="rsNavItem rsBullet">
	<span></span>
</div>
</div>
<div class="rsArrow rsArrowLeft rsArrowDisabled" style="display: block;">
<div class="rsArrowIcn"></div>
</div>
<div class="rsArrow rsArrowRight" style="display: block;">
<div class="rsArrowIcn"></div>
</div>
<div class="rsGCaption"></div>
</div>
</div>
<div style="line-height:25pt; background-color:#E7E7E7;">
<span style="line-height:25pt; background-color:#E7E7E7;">
<h2 style="text-align:center;">
<span style="line-height:1.5;">华发国宾一号240平现代中式装修案例</span>
</h2>
主要用材：本案业主更注重享受价值，采用实木，天然大理石，不锈钢，硬包，墙布，乳胶漆，地暖，新风系统，智能系统等
<br>
设计说明：本案本案业主更注重享受感觉，用地暖，智能灯光，以及全屋智能化一体的系统，现代的材料打造新中式设计理念，通过采用天然石材以及原木，不锈钢搭配来塑造。运用不锈钢以及原木线条来点缀时尚感，木材及天然石材来打造高端大气的自然的感觉，新中式符号搭配传统的红木家私达到时尚的豪华的中式风格，运用硬装服务于软转，软装服务于人的设计理念。
<br></span>
</div>
<li>
上一篇：
<a href="http://m.nnxyzs.com/detail/968.html">荣和悦澜山109平装修案例</a>
</li>
<li>
下一篇：
<a href="http://m.nnxyzs.com/detail/970.html">华发国宾一号110平装修案例</a>
</li>
<script>
      jQuery(document).ready(function($) {
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: false,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fit',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 450,
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

    imgWidth: null,
    imgHeight: null
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