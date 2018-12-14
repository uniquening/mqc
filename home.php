<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
	<meta content="telephone=no" name="format-detection">
	<meta name="applicable-device" content="mobile">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/headfooter.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/common.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/index.css">
	<script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/js/b.js"></script>
	<script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/js/lxb.js"></script>
	<script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/js/v.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/hm.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/to8torsas.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/zbcommon.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.superslide.js"></script>

	<?php include( TEMPLATEPATH . '/seo.php' ); ?>

	<script src="<?php bloginfo('template_directory'); ?>/js/mobile_nb.js" charset="UTF-8"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>
	/css/main.css">
	<script charset="utf-8" data-require-id="embed/mobilelite/main" src="<?php bloginfo('template_directory'); ?>/js/main.js" async=""></script>
	
</head>

<body>

<header id="dt-hd" class="navstyle2">
	<a class="goIndex" href="<?php echo home_url(); ?>" style="position:absolute;top:6px;left:10px;">

		<img src="<?php bloginfo('template_directory'); ?>
		/images/59b363c479680.jpg" width="150" height="32" style="vertical-align:top">
	</a>

	<h1>
			<!-- <nav class="login-heads-frame">
			<a href="/my/my/index">
				<span class="login-heads-top" id="addhovers"></span>
			</a>
		</nav>
		-->
		<!--右边导航按钮-->

		<nav id="dt-hd-nav"> <i class="icon-dt-hd" id="add_nav_hovers"></i>
		</nav>

		<div id="dt-hd-navs-wrap" class="hide">

				<li>
					<a class="goIndex" href="<?php echo home_url(); ?>"> <i class="icon-navf0"></i>
						<p>首页</p>
					</a>
				</li>

				<!--经典  案例  展示  开始 -->

				<li>
					<a class="click-point" data-point="2_1_1_1" href="<?php echo get_category_link(7); ?>">
						<i class="icon-navf1"></i>
						<p>家装效果案例</p>
					</a>
				</li>
				<!--经典  案例  展示  结束 -->

				<!--装修效果图 开始 -->
				<li>
					<a class="click-point" data-point="2_1_1_2" href="<?php echo get_category_link(37); ?>">
						<i class="icon-navf2"></i>
						<p>在施工地</p>
					</a>
				</li>
				<!--装修效果图 结束 -->

				<!--设计团队 开始 -->
				<li>
					<a class="click-point" data-point="2_1_1_2" href="<?php echo get_permalink(94); ?>">
						<i class="icon-navf3"></i>
						<p>公司简介</p>
					</a>
				</li>
				<!--设计团队 结束 -->

				<!--装修攻略 开始 -->
				<li>
					<a class="click-point city-update-left" data-point="2_1_1_6" href="<?php echo get_category_link(5); ?>">
						<i class="icon-navf4"></i>
						<p>设计团队</p>
					</a>
				</li>
				<!--装修攻略 结束 -->

				<!--公司介绍 开始 -->
				<li>
					<a class="click-point" data-point="2_1_1_4" href="<?php echo get_category_link(18); ?>">
						<i class="icon-navf6"></i>
						<p>星艺活动</p>
					</a>
				</li>
				<!--公司介绍 结束 -->

				<!--材料知识 开始 -->
				<li>
					<a class="click-point" data-point="2_1_1_5" href="<?php echo get_category_link(60); ?>">
						<i class="icon-navf5"></i>
						<p>星艺主材展厅</p>
					</a>
				</li>
				<!--材料知识 结束 -->

				<!--合作品牌  开始 -->
				<li>
					<a class="click-point" data-point="2_1_1_7" href="#">
						<i class="icon-navf8"></i>
						<p>星钻工艺</p>
					</a>
				</li>
				<!--合作品牌  结束 -->

				<!--客户见证  开始 -->
				<li>
					<a class="click-point" data-point="2_1_1_8" href="<?php echo get_category_link(63); ?>">
						<i class="icon-navf9"></i>
						<p>客户见证</p>
					</a>
				</li>
				<!--客户见证  结束 -->

			</ul>

		</div>
	</h1>
</header>

<div class="index_page" id="indexPage" data-city="bj">

	<script src="<?php bloginfo('template_directory'); ?>/js/TouchSlide.1.1.js"></script>
	<style type="text/css">
		.slideBox{ position:relative; overflow:hidden; margin:0px auto;  max-width:560px;}
		.slideBox .hd{ position:absolute; height:28px; line-height:28px; bottom:0; right:0; z-index:1; }
		.slideBox .hd li{ display:inline-block; width:5px; height:5px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; background:#333; text-indent:-9999px; overflow:hidden; margin:0 6px;   }
		.slideBox .hd li.on{ background:#fff;  }
		.slideBox .bd{ position:relative; z-index:0; }
		.slideBox .bd li{ position:relative; text-align:center;  }
		.slideBox .bd li img{ background:url(/Websites/mifantuan/Templates/mftm/Static/images/loading.gif) center center no-repeat;  vertical-align:top; width:100%;height:130px;/* 图片宽度100%，达到自适应效果 */}
		.slideBox .bd li a{ -webkit-tap-highlight-color:rgba(0,0,0,0);  } 
		.slideBox .bd li .tit{ display:block; width:100%;  position:absolute; bottom:0; text-indent:10px; height:28px; line-height:28px; background:url(/Websites/mifantuan/Templates/mftm/Static/images/focusBg.png) repeat-x; color:#fff;  text-align:left;  }
    </style>
	<div id="slideBox" class="slideBox">
		<div class="bd">
			<div class="tempWrap" style="overflow:hidden; position:relative;">
				<ul style="width: 3750px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 200ms; transform: translate(-1875px, 0px) translateZ(0px);">
        			<?php 
    					$imageSrc =  get_post_meta(487, 'imageSrc', false); 
    					$imagelink = get_post_meta(487, 'imagelink', false);
    					$imagealt =  get_post_meta(487, 'imagealt', false);
    					for ($i = 0; $i < count($imageSrc); ++$i) {
    						?>
    						<!-- <div class="swiper-slide"><a href="<?php echo $imagelink[$i]; ?>"><img src="<?php echo $imageSrc[$i]; ?>" alt="<?php echo $imagealt[$i]; ?>"></a></div> -->
    							<li style="display: table-cell; vertical-align: top; width: 375px;">
    								<a class="pic" href="<?php echo $imagelink[$i]; ?>">
    									<img src="<?php echo $imageSrc[$i]; ?>" alt="<?php echo $imagealt[$i]; ?>">
    								</a>
    								<a class="tit" href="<?php echo $imagelink[$i]; ?>"><?php echo $imagealt[$i]; ?></a>
    							</li>				
    						<?php		
    					}
    				?>
					<!--<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/580c1e4b524bc.jpg"></a>
						<a class="tit" href="<?php echo home_url(); ?>">星艺装饰星钻工艺</a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/5bd95c016bcf3.png"></a>
						<a class="tit" href="<?php echo home_url(); ?>">南宁星艺装饰家装福利狂欢节</a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/5b979932b9021.jpg"></a>
						<a class="tit" href="<?php echo home_url(); ?>"></a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/5a20bf5446dde.jpg"></a>
						<a class="tit" href="<?php echo home_url(); ?>"></a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/594f647634ad4.jpg"></a>
						<a class="tit" href="<?php echo home_url(); ?>"></a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo get_category_link(7); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/5b4d9c9cefb63.jpg"></a>
						<a class="tit" href="<?php echo get_category_link(7); ?>">保利领秀前城案例集锦</a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo get_category_link(5); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/58c3cb630223f.jpg"></a>
						<a class="tit" href="<?php echo get_category_link(5); ?>">南宁星艺装饰公司设计师团队</a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo get_category_link(37); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/58ae445b11f91.jpg"></a>
						<a class="tit" href="<?php echo get_category_link(37); ?>">南宁星艺装饰在施工地一览</a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/580c1e4b524bc.jpg"></a>
						<a class="tit" href="<?php echo home_url(); ?>">星艺装饰星钻工艺</a>
					</li>
					<li style="display: table-cell; vertical-align: top; width: 375px;">
						<a class="pic" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/5bd95c016bcf3.png"></a>
						<a class="tit" href="<?php echo home_url(); ?>">南宁星艺装饰家装福利狂欢节</a>
					</li>-->
				</ul>
			</div>
		</div>

		<div class="hd">
			<ul>
    			<?php 
					$imageSrc =  get_post_meta(479, 'imageSrc', false); 
					$imagelink = get_post_meta(479, 'imagelink', false);
					$imagealt =  get_post_meta(479, 'imagealt', false);
					for ($i = 0; $i < count($imageSrc); ++$i) {
						if ($i == 1) {
							echo '<li class="on">' .$i . '</li>';
						} else {
							echo '<li>' .$i . '</li>';
						}	
					}
				?>			    
				<!--<li class="">1</li>
				<li class="">2</li>
				<li class="">3</li>
				<li class="">4</li>
				<li class="on">5</li>
				<li class="">6</li>
				<li class="">7</li>
				<li class="">8</li>-->
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		TouchSlide({ 
			slideCell:"#slideBox",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"leftLoop", 
			autoPage:true,//自动分页
			autoPlay:true //自动播放
		});
	</script>

	<!-- 主要功能区开始   -->
	<section>
		<ul class="main-enter bottom-half-pixel clearfix">
			<li>
				<a class="click-point" data-point="2_1_1_1" href="<?php echo get_category_link(7); ?>">
					<span class="icon-zxtuku-enter"></span>
					<h2>装修案例</h2>
				</a>
			</li>
			<li>
				<a class="click-point" data-point="2_1_1_5" href="<?php echo get_category_link(37); ?>">
					<span class="icon-zxgl-enter"></span>
					<h2>在施工地</h2>
				</a>
			</li>

			<li>
				<a class="click-point" data-point="2_1_1_4" href="<?php echo get_permalink(94); ?>">
					<span class="icon-zxgx-enter"></span>
					<h2>公司简介</h2>
				</a>
			</li>

			<li>
				<a class="click-point" data-point="2_1_1_7" href="<?php echo get_category_link(5); ?>">
					<span class="icon-pptm-enter"></span>
					<h2>设计团队</h2>
				</a>
			</li>
			<li>
				<a class="click-point" data-point="2_1_1_6" href="<?php echo get_category_link(18); ?>">
					<span class="icon-gyyf-enter"></span>

					<h2>星艺活动</h2>
				</a>
			</li>

			<!--下面内容为  占位开始 -->

			<li>
				<a class="click-point" data-point="2_1_1_3" href="<?php echo get_category_link(60); ?>">
					<span class="icon-hxsj-enter">
						<!-- <em>展厅图</em>-->
					</span>
					<h2>星艺主材展厅</h2>
				</a>
			</li>

			<li>
				<a class="click-point" data-point="2_1_1_2" href="<?php echo home_url(); ?>">
					<span class="icon-zxbj-enter">
						<!-- <em>忠庭工艺</em>
					-->
					</span>
					<h2>工艺材料</h2>
				</a>
			</li>

			<li>
				<a class="click-point" data-point="2_1_1_6" href="<?php echo get_category_link(63); ?>">
					<span class="icon-zxb-enter"></span>
					<h2>客户见证</h2>
				</a>
			</li>
			<!--  占位  结束  -->

		</ul>
	</section>

	<div class="sp bottom-half-pixel"></div>

	<!-- 小导航 -->

	<section>
		<ul class="knowlage clearfix">
			<li>
				<a href="<?php echo home_url(); ?>">
					<i class="rj"></i>
					<span>星钻工艺</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_category_link(19); ?>">
					<i class="fs"></i>
					<span>装修攻略</span>
				</a>
			</li>

			<li>
				<a href="<?php echo get_category_link(37); ?>">
					<i class="xz"></i>
					<span>工地开口说话</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_category_link(9); ?>">
					<i class="xw"></i>
					<span>视频样板房</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_permalink(113); ?>">
					<i class="dk"></i>
					<span>合作品牌</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_category_link(63); ?>">
					<i class="mb"></i>
					<span>赞誉与肯定</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- 小导航 -->

	<!-- 装修效果图开始 -->

	<div class="top-sct top-sct-xgt">

		<header class="sct-hd sct-hd-zxxg bottom-half-pixel xb-list">
			<h1>装修案例</h1>
			<ul class="row list-tb">
				<li class="on">现代简约</li>
				<li>新古典</li>
				<li>欧式典雅</li>
				<li>美式风格</li>
			</ul>
		</header>

		<div class="sct-bd sct-bd-xgt sct-bd-pd swipe" style="visibility: visible; height: 746px;">
			<div id="swipXgtBd" class="swipe_wrap swipe-xgt">

				<div class="bd" data-index="0" style=" left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
					<!--根据  房屋类型  开始 -->
					
					<?php
						$args=array(
							'orderby' => 'id',
							'order' => 'ASC',
							'parent' => 20,
							'number' => 4,
						);
						$categories=get_categories($args);
						$count = 0;
						foreach($categories as $category) {
							$count++;
							$category_term_id = $category->term_id; 
							if ($count == 1) {
								echo '<ul class="xgt-list clearfix">';
							} else {
								echo '<ul class="xgt-list clearfix" style="display: none;">';
							}
							?>
							<?php if (have_posts()) : ?>
							<?php query_posts('cat=$category_term_id&caller_get_posts=1&showposts=6'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<li>
								<a class="page-container" href="<?php the_permalink(); ?>">
									<div class="page-wrap">
										<img src="<?php bloginfo('template_directory'); ?>/images/58535dde9efb9.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/58535dde9efb9.jpg" alt="中铁江湾山语城150平装修案例" width="200" height="200" style="display: block;">
										<footer>
											<p><?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?></p>
										</footer>
									</div>
								</a>
							</li>						
							<?php endwhile; ?>
							<?php endif; wp_reset_query(); ?> 

						</ul>	

					<?php
							}
					?>
				
					
					<!-- <ul class="xgt-list clearfix" style="display: none;">
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/605.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/585237e282e6b.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/585237e282e6b.jpg" alt="凤岭春天198平装修案例" width="200" height="200">
									<footer>
										<p>凤岭春天198平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/370.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853940ab6146.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853940ab6146.jpg" alt="龙胤花园380平别墅装修案例" width="200" height="200">
									<footer>
										<p>龙胤花园380平别墅装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/335.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853a687987be.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853a687987be.jpg" alt="碧水天和160平装修案例" width="200" height="200">
									<footer>
										<p>碧水天和160平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/330.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853a7c6493c2.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853a7c6493c2.jpg" alt="海华东盟公馆160平装修案例" width="200" height="200">
									<footer>
										<p>海华东盟公馆160平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/326.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853a91ed6f83.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853a91ed6f83.jpg" alt="盛天华府140平装修案例" width="200" height="200">
									<footer>
										<p>盛天华府140平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/295.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853ac31761bd.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853ac31761bd.jpg" alt="南湖名都广场165平装修案例" width="200" height="200">
									<footer>
										<p>南湖名都广场165平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/252.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853b0b6e1484.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853b0b6e1484.jpg" alt="广源国际社区172平装修案例" width="200" height="200">
									<footer>
										<p>广源国际社区172平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/201.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853b57c71caf.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853b57c71caf.jpg" alt="凤景湾179平装修设计案例" width="200" height="200">
									<footer>
										<p>凤景湾179平装修设计案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/70.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853b97ab8bc4.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853b97ab8bc4.jpg" alt="翡翠园碧瑶阁120平装修案例" width="200" height="200">
									<footer>
										<p>翡翠园碧瑶阁120平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/69.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853b9c86807d.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853b9c86807d.jpg" alt="领世郡一号178平装修案例" width="200" height="200">
									<footer>
										<p>领世郡一号178平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
					</ul>
					<ul class="xgt-list clearfix" style="display: none;">
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/709.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5871e82974e82.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2017-01-08/5871e82974e82.jpg" alt="汇东郦城140平装修案例" width="200" height="200">
									<footer>
										<p>汇东郦城140平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/648.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/585207437bd6f.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/585207437bd6f.jpg" alt="荣和千千树113平装修案例" width="200" height="200">
									<footer>
										<p>荣和千千树113平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/404.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5851fe1ce1f27.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/5851fe1ce1f27.jpg" alt="翡丽湾320平别墅装修案例" width="200" height="200">
									<footer>
										<p>翡丽湾320平别墅装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/339.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853a161906f4.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853a161906f4.jpg" alt="华凯大院400平装修案例" width="200" height="200">
									<footer>
										<p>华凯大院400平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/710.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5871f3fb76cf6.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2017-01-08/5871f3fb76cf6.jpg" alt="昌泰东盟园200平装修设计案例" width="200" height="200">
									<footer>
										<p>昌泰东盟园200平装修设计案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/662.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/585200ebf12b1.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/585200ebf12b1.jpg" alt="南湖名都328平装修案例" width="200" height="200">
									<footer>
										<p>南湖名都328平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/655.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5852042fb2d6b.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/5852042fb2d6b.jpg" alt="德利AICC175平装修案例" width="200" height="200">
									<footer>
										<p>德利AICC175平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/672.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5851ff2677f91.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/5851ff2677f91.jpg" alt="凤岭春天120平装修案例" width="200" height="200">
									<footer>
										<p>凤岭春天120平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/650.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/585206ac8084e.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/585206ac8084e.jpg" alt="瀚林新城90平装修案例" width="200" height="200">
									<footer>
										<p>瀚林新城90平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/646.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/585207e922c2b.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/585207e922c2b.jpg" alt="盛天东郡145平装修案例" width="200" height="200">
									<footer>
										<p>盛天东郡145平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
					</ul>
					<ul class="xgt-list clearfix" style="display: none;">
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/708.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5870bfc44da46.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2017-01-07/5870bfc44da46.jpg" alt="八桂绿城别墅装修案例" width="200" height="200">
									<footer>
										<p>八桂绿城别墅装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/554.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5851fd4a152b2.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/5851fd4a152b2.jpg" alt="嘉和城温莎北郡89平装修案例" width="200" height="200">
									<footer>
										<p>嘉和城温莎北郡89平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/652.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/585205972fc82.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/585205972fc82.jpg" alt="嘉和城蒙特利岛170平装修案例" width="200" height="200">
									<footer>
										<p>嘉和城蒙特利岛170平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/638.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/58520c77cef6e.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/58520c77cef6e.jpg" alt="维也纳森林130平装修案例" width="200" height="200">
									<footer>
										<p>维也纳森林130平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/576.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/58525f021eb08.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-15/58525f021eb08.jpg" alt="盛天华府110平装修案例" width="200" height="200">
									<footer>
										<p>盛天华府110平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/420.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/58705653dc24a.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2017-01-07/58705653dc24a.jpg" alt="盛天果岭116平装修案例" width="200" height="200">
									<footer>
										<p>盛天果岭116平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/411.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853557e7d238.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853557e7d238.jpg" alt="翡丽湾320平装修案例" width="200" height="200">
									<footer>
										<p>翡丽湾320平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/365.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/5853973408197.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/5853973408197.jpg" alt="德利AICC130平户型设计效果" width="200" height="200">
									<footer>
										<p>德利AICC130平户型设计效果</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/356.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/58539a5ae2471.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/58539a5ae2471.jpg" alt="金源一品205平装修案例" width="200" height="200">
									<footer>
										<p>金源一品205平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
						<li>
							<a class="page-container" href="http://m.nnxyzs.com/detail/344.html">
								<div class="page-wrap">
									<img src="<?php bloginfo('template_directory'); ?>
									/images/58539e4e6b2e1.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2016-12-16/58539e4e6b2e1.jpg" alt="瀚林新城90平装修案例" width="200" height="200">
									<footer>
										<p>瀚林新城90平装修案例</p>
									</footer>
								</div>
							</a>
						</li>
					</ul> -->
					<!--根据  房屋类型  结束  -->

					<div class="sct-footer sct-footer-xgt" style="display: none;">
						<a href="http://m.nnxyzs.com/lists/11.html">
							更多案例
							<span class="icon-more"></span>
						</a>
					</div>
				</div>
				<!-- end 空间 -->
			</div>
		</div>
	</div>
	<script>
	    $(function (){
	        $('.top-sct-xgt').slide({"titCell": '.list-tb li', "mainCell": '.bd'});
	    })
	</script>
	<!-- 装修效果图结束 -->

	<!-- 快速装修通道开始 -->
	<div class="top-sct top-sct-mfsj bottom-half-pixel" id="for">
		<header class="sct-hd sct-hd-mfsj bottom-half-pixel">
			<h1>
				预约免费量房
				<span class="sct-hd-mfsj-info">
					已有
					<i id="formnum"><em>5680</em></i> 
					位业主申请了此服务
				</span>
			</h1>
			<script>$("#formnum").load("/Messages/tongji.html");</script>
		</header>
		<div class="sct-bd">

		<!--不能轻易删除   开始-->
			<div class="lastest-zbs-wrap bottom-half-pixel">
				<ul class="lastest-zbs" style="transform: translate(0px, -1142.4px); transition: all 300ms ease 0s;">


					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/1023.html">【最新案例】嘉和城高迪山别墅380平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/1022.html">【最新案例】嘉和城高迪山280平别墅装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/999.html">【最新案例】天昌东盟中央城87平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/998.html">【最新案例】荣和山水绿城84平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/997.html">【最新案例】瀚林新城86平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/996.html">【最新案例】海华东盟公馆146平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/995.html">【最新案例】龙光普罗旺斯103平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/994.html">【最新案例】荣和千千树127平装修案例</a>

					</li>
					<li class="text-over-hidden">

						<a href="http://m.nnxyzs.com/detail/990.html">【最新案例】德利AICC 235平装修案例</a>

					</li>
				</ul>

				<i class="icon-notice"></i>
			</div>

		<!--不能轻易删除   结束-->

			<form class="mfsj-from" name="report" id="report" method="post" action="http://m.nnxyzs.com/Messages/add.html">
				<input class="row mfsj-name" name="name" type="text" id="sname" placeholder="您的称呼">
				<input class="row mfsj-tel" name="phone" id="stel" type="tel" placeholder="您的联系方式">
				<div class="row mfsj-area-row">
					<input class="mfsj-area" name="mianji" id="sarea" type="tel" placeholder="房屋面积">
					<span>㎡</span>
				</div>
				<input class="row mfsj-tel" name="address" id="sbuild" type="tel" placeholder="楼盘名称">

				<div>
					<input type="text" class="row mfsj-tel" id="code" maxlength="4" name="verify" placeholder="验证码">
					<img id="code_imgx" onclick="this.src=this.src" alt="点击刷新" src="<?php bloginfo('template_directory'); ?>/html/verify.html" style="cursor:pointer; vertical-align: bottom;width:75px;height:28px">
				</div>

				<div class="btnbox ac">
					<input type="submit" class="mfsj-info" value="立即免费申请" name="dosubmit" id="dosubmit" onclick="return check();" style="    display: block;height: 44px; width:100%;line-height: 44px;text-align: center;background-color: #ea4504;color: #fff;border: 0!important;font-size: 17px">

					<input type="hidden" name="info[citys]" id="citys" size="50" value="3399" class="input-text"></div>

				<!-- <div  type="submit" class="row mfsj-submit">预约免费设计</div>-->
				<input type="hidden" name="laiyuanip" value="117.36.183.192">
				<div class="mfsj-info">
					<i class="icon-info"></i>
					<div>
						我们承诺：
									公司提供该项
						<em>免费服务，绝不产生任何费用</em>
						，
									为了您的利益以及我们的口碑，您的隐私将被严格保密。
					</div>
				</div>
			</form>

		</div>
	</div>
	<!-- 快速装修通道结束 -->

	<div class="top-sct top-sct-zxzzd">
		<header class="sct-hd sct-hd-zxzzd bottom-half-pixel">
		<h1>装修早知道</h1>
		</header>

		<div class="sct-bd sct-bd-pd sct-zxzzd">
			<div class="zxzzd-items">
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=19&caller_get_posts=1&showposts=2'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="zxzzd-item">
						<a class="click-point" data-point="2_1_2_1" href="<?php the_permalink(); ?>">
							<h3>家装攻略</h3>
							<p><?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?></p>
							<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
							<img alt="装修流程" src="<?php bloginfo('template_directory'); ?>/images/59ab64516272d.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2017-09-03/59ab64516272d.jpg">
						</a>
					</div>				
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 
			</div>
		</div>
		<div class="sct-footer bottom-half-pixel">
			
			<a href="<?php echo get_category_link(19); ?>">
			更多家装知识
			<span class="icon-more"></span>
			</a>
		</div>
	</div>

	<!-- 装修早知道结束 -->

	<!-- 装饰行情开始 动态数据-->

	<div class="top-sct top-sct-zxhq bottom-half-pixel">

		<header class="sct-hd sct-hd-zxhq decorationTitle bottom-half-pixel">
			<h1>客户见证</h1>
		</header>

		<div class="sct-bd sct-bd-pd">
			<div class="situation-box">
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=63&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="situation-box-item">
					<a class="click-point" data-point="2_1_3_1" href="<?php the_permalink(); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b98d909d4512.jpg" class="lazy" data-original="/Websites/mifantuan/Uploads/Picture/2018-09-12/5b98d909d4512.jpg" alt="龙光玖珑湖业主送来锦旗">
						<span><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></span>
					</a>
					<div>
						<a href="<?php the_permalink(); ?>">
							<h3><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></h3>
							<p>
								﻿﻿<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 120,"……"); ?>
													9月9日一大早收到客户送来的锦旗，锦旗胜情书，客户对星艺的项目监理和服务团队竖起大拇指，（客户原话：非...
							</p>
						</a>
					</div>
				</div>				
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 
			</div>
		</div>
	</div>

	<!-- 装饰行情结束 -->

	<!-- 站点介绍开始 -->

	<!-- 站点介绍结束 -->
	<!-- 咨询热线开始 -->

	<div class="top-sct top-sct-zxrx bottom-half-pixel">
		<a href="tel:0771-5596299">
			<span class="span-info">装修咨询热线：</span>
			<i class="icon-tel-green"></i>
			<span class="span-tel">0771-5596299</span>
		</a>
	</div>
<!-- 咨询热线结束 -->
</div>



<div class="fix-nav" id="fix-nav" style="display: none;">
<div class="fix-nav-wrap">
<img class="i-totop" src="<?php bloginfo('template_directory'); ?>/images/to_top.png">
<p>置顶</p>
</div>
</div>
<script type="text/javascript">
        jQuery(function($){
            $(window).bind("scroll",function() { 
                initScroll() 
            });

            var $fixnav = $('#fix-nav');
            function initScroll()
            {
                if ($(window).scrollTop() > $(window).height()/4) {
                    $fixnav.show();
                } else {
                    $fixnav.hide();
                }
            }

            $('.fix-nav-wrap').bind('click', function(e){
                $(window).scrollTop(0);
            });
        });
        

    </script>

<!-- 	<div class="pg-ft">
<ul class="terminal-nav">

<li>
<a class="active" href="/">回到首页</a>
</li>
<li>
<span class="i-sep"></span>
<a href="/lists/11.html">装修案例</a>
</li>
<li>
<span class="i-sep"></span>
<a href="/page/43.html">公司简介</a>
<span class="i-sep"></span>
</li>
</ul>

<div class="company-info"></a>
&nbsp;桂ICP备17002251号
</div>
</div>
-->
<!--底部悬浮窗口  -->
<style>
.foot-fix {width: 100%;height: 50px;z-index: 999;bottom: 0px;position: fixed;font-size: 14px;background: #343434;line-height: 16px;}
.foot-fix li{list-style:none;width:25%;text-align:center;font-family:"微软雅黑";float:left;}
.foot-fix li p{color:#FFF;}
.foot-fix a{display: block;padding-top: 3px;}
.foot-fix a:hover,.foot-fix a.on{background-color: #e70;height: 65px;}
.foot-fix a img {width:26px; height:26px}
</style>
<div class="foot-fix">
<ul>
<li>
<a href="<?php echo home_url(); ?>" class="on">
<img src="<?php bloginfo('template_directory'); ?>/images/1f.png" alt="首页">
<p>首页</p>
</a>
</li>
<li>
<a href="<?php echo home_url(); ?>/#for">
<img src="<?php bloginfo('template_directory'); ?>/images/2f.png" alt="申请报价">
<p>申请报价</p>
</a>
</li>
<li>
<a href="http://p.qiao.baidu.com/cps2/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sessionid%22%3A%22%22%2C%22siteId%22%3A%227984991%22%2C%22tid%22%3A%22-1%22%2C%22userId%22%3A%2210666589%22%2C%22ttype%22%3A1%7D">
<img src="<?php bloginfo('template_directory'); ?>/images/3f.png" alt="在线咨询">
<p>在线咨询</p>
</a>
</li>
<li>
<a href="tel:0771-5596299">
<img src="<?php bloginfo('template_directory'); ?>/images/4f.png" alt="电话预约">
<p>电话预约</p>
</a>
</li>
</ul>
</div>
<!--底部悬浮窗口  -->

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0ecbee183820699325b15374bf2d9ec3";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/index.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/globalprovinces.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/h5appdownload_sourcecharge.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/150572.js" async="" defer=""></script>

<div id="alertOveryLayer" style="position: fixed; left: 0px; top: 0px; z-index: 99999; text-align: center; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.298); display: none;">
<div style="  position: absolute;display: -moz-box;  display: -webkit-box;  display: -webkit-flex;  display: -moz-flex;  display: -ms-flexbox;  display: -ms-flex;  display: flex;top: 30%;width: 100%;">
<div class="alert-lay" style="/* display: table-cell; */vertical-align: middle;padding: 0 10%;-webkit-box-sizing: border-box;  -moz-box-sizing: border-box;  box-sizing: border-box;  display: block;  -webkit-box-flex: 1;  -moz-box-flex: 1;  -webkit-flex: 1 1 0;  -moz-flex: 1 1 0;  -ms-flex: 1 1 0;  flex: 1 1 0;  text-align: center;">
<div class="overlay-bd" style="background-color: #fff;font-size: 14px;color: #333333;line-height: 24px;padding: 20px 15px;text-align: center;border-radius: 7px 7px 0 0;">asdf</div>
<div class="overlay-foot" style="border-top: 1px solid #e3e3e3;">
<div class="overlay-btn overlay-btn-ok" style="background-color: #fff;cursor: pointer;font-size: 16px;color: #00a1ff;height: 42px;line-height: 42px;border-radius: 0 0 7px 7px;">好的</div>
</div>
</div>
</div>
</div> <ins id="newBridge"><!-- target: invitebox --> <ins class="nb-invite-wrap-base nb-invite-wrap-0 mobile-invite-bottom" id="nb_invite_wrap" style="min-height:133.4px;display:none;"><!-- // = 3 为高级定制 -->
<ins class="nb-invite-tool-base nb-invite-tool" id="nb_invite_tool">×</ins>
<ins class="nb-invite-body-base nb-invite-body">
<ins class="nb-invite-welcom nb-show">感谢访问星艺装饰南宁官网。售后质保2年 水电10年 家住南宁不看星艺不装修 0771-5596299</ins>
<ins class="nb-invite-btns">
<ins class="nb-invite-ok" id="nb_invite_ok">现在咨询</ins>
<ins class="nb-invite-no" id="nb_invite_cancel">稍后再说</ins></ins> </ins> 
</ins>
<!-- end -->
</ins>
<iframe name="411671" height="0" width="0" src="<?php bloginfo('template_directory'); ?>/html/mv.html" style="display: none;"></iframe>
</body>
</html>