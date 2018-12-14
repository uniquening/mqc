<?php get_header(); ?>
<?php
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;    
?>
	<!-- 主体 -->
	<div class="Column-100 moduleTop">
		<div class="Column clearfix">
			<div class="Leader fr">
				当前位置：
				<a href="http://www.nnxyzs.com/">首页</a>
				&nbsp;&gt;&nbsp;
				<a href="http://www.nnxyzs.com/page/43.html">走进星艺</a>
				&nbsp;&gt;&nbsp;
				<a href="http://www.nnxyzs.com/lists/49.html">联系我们</a>
			</div>
			<div class="moduleTt news">
				<?php qfl_show_cat_id_slug(65); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="images/59f68af30afa6.jpg" class="autoWidth">
	</div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>
				<?php $var = null; 
					global $post;
					
				?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=65&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $current_id = $post->ID; ?>
				<?php 
					if ($page_id == $current_id) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
				?>
					<a href="<?php the_permalink(); ?>">
						<span><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></span>
					</a>
					<?php echo '</li>';?>
				<!--需要循环的模块-->
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 
<!-- 				<li>
					<a href="http://www.nnxyzs.com/page/43.html">
						<span>公司简介</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/47.html">
						<span>公司荣誉</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/48.html">
						<span>人才招聘</span>
					</a>
				</li>
				<li class="current">
					<a href="http://www.nnxyzs.com/lists/49.html">
						<span>联系我们</span>
					</a>
				</li>

				<li>
					<a href="http://www.nnxyzs.com/page/73.html">
						<span>星艺材料概述</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="js/jquery-1_002.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<div style="display: none;" id="box_model" class="team-box modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 id="myModalLabel"></h4>
			</div>
			<div class="modal-body">
				<iframe class="iframe-body" src=" " width="100%" height="500" frameborder="0"></iframe>
			</div>
		</div>
		<div class="w1024">
			<div class="ml20 mr20 mb20">
				<div class="container-fluid bgc p30">
					<div class="row-fluid">
						<div class="span8">
							<h2 class="fn">星艺集成整装</h2>
							<p class="pt50 muted f14"></p>
							<p>
								<span style="line-height:1.5;">
									集团为了全面服务好客户，满足各阶层客户个性化需求，在原有的高端设计机构—星艺·余
工设计师楼、星艺·尚品的基础上，特成立广东星艺装饰集团广西有限公司集成分公司（简称“星艺集成”），星艺集成是由星艺装饰集团全资打造，集设计、施
工、建材销售、软装配饰为一体，为客户提供整体家装一站式服务的新模式。全案设计，定制整装，超大规模的家居体验馆，通过整合国内外一线品牌建材，去除中
间环节，立省30%，均符合国家环保标准，全责售后，全程无忧，真正让客户省时、省心、省力、省钱。
								</span>
							</p>
							<p>
								<br></p>
							<p>
								<span style="line-height:1.5;">
									<br></span>
							</p>
							<p></p>
						</div>
						<div class="span4">
							<a onclick="openIframe('龙兵科技','http://j.map.baidu.com/4avbC');" href="javascript:void(0);">
								<img src="images/580c5d233bff3.jpg" class="imgsize"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="ml20 mr20 mb20">
				<div class="container-fluid bgc p30">
					<div class="row-fluid">
						<div class="span8">
							<h2 class="fn">星艺装饰汇东店</h2>
							<p class="pt50 muted f14"></p>
							<p>
								广东星艺装饰集团股份有限公司南宁分公司成立于2002年5月1日，是广东星艺装饰集团的全资子公司，属建筑装饰装修工程设计与施工一体化二级资质企业，
主营住宅装饰装修和酒店、宾馆、会所、商场、展厅、办公楼等公共空间设计和施工，兼营家具制作、建筑材料、软装配饰一体化室内装饰服务。
							</p>
							<p></p>
						</div>
						<div class="span4">
							<a onclick="openIframe('龙兵科技','http://j.map.baidu.com/4avbC');" href="javascript:void(0);">
								<img src="images/5923fa71bbf58.jpg" class="imgsize"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="ml20 mr20 mb20">
				<div class="container-fluid bgc p30">
					<div class="row-fluid">
						<div class="span8">
							<h2 class="fn">星艺尚品设计院</h2>
							<p class="pt50 muted f14"></p>
							<p>
								星艺尚品室内设计研究院，是广东星艺装饰集团成立的西南地区高端室内设计研究机构。尚品集合了星艺装饰集团的优秀设计团队。以雄厚的设计力量和丰富的设计
经验以及广阔的专业视野为客户提供强大的创意型设计平台。作为集团在西南地区的专业设计品牌，“高端设计·服务广西·西南·面向东盟”是尚品的品牌定位和
发展方向。通过整合集团遍布全国的雄厚行业资源，我们将为客户提供全方位的项目规划，家居定制、软装陈设及室内设计与施工服务。
							</p>
							<div>
								<br></div>
							<br>
							<p></p>
						</div>
						<div class="span4">
							<a onclick="openIframe('龙兵科技','http://j.map.baidu.com/4avbC');" href="javascript:void(0);">
								<img src="images/5923f32fbae1b.jpg" class="imgsize"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="ml20 mr20 mb20">
				<div class="container-fluid bgc p30">
					<div class="row-fluid">
						<div class="span8">
							<h2 class="fn">星艺富安居设计中心</h2>
							<p class="pt50 muted f14">为满足各阶段人群的消费需求，2017年特设立富安居设计中心</p>
						</div>
						<div class="span4">
							<a onclick="openIframe('龙兵科技','http://j.map.baidu.com/4avbC');" href="javascript:void(0);">
								<img src="images/5997a6d674951.jpg" class="imgsize"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="ml20 mr20 mb20">
				<div class="container-fluid bgc p30">
					<div class="row-fluid">
						<div class="span8">
							<h2 class="fn">星艺余工设计师楼</h2>
							<p class="pt50 muted f14"></p>
							<p>
								星艺装饰-余工设计师楼以做高、精、尖及专业打造别墅、豪宅、及商业空间为主攻方向、以高素质的施工队伍及完美的售后服务，吸引了众多客户。以其独有的企
业文化，吸引并聚集了大批优秀人才，从中不断吸取国内外的先进设计文化理念，通过大量的现代设计方案的制作，来全面提高设计师专业素质，定期组织建筑人才
参加各地项目考察与学习，充分了解设计市场、理论研究结合实地考察，切实加强设计师的项目整体规划与实际创作能力。
							</p>
							<p>
								<br></p>
							<p>
								<iframe src="images/index.htm" style="width:560px;height:362px;" frameborder="0"></iframe>
							</p>
							<h3>
								<span style="color:#E53333;line-height:1.5;font-size:18px;background-color:#FFFFFF;">到邕桂店提前预约，可免费停车，安排车位，预约热线：0771-5596299 &nbsp;竭诚为您服务</span>
							</h3>
							<p></p>
						</div>
						<div class="span4">
							<a onclick="openIframe('龙兵科技','http://j.map.baidu.com/4avbC');" href="javascript:void(0);">
								<img src="images/5923f66ebbde2.jpg" class="imgsize"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
	function openIframe(title,link_href){
		$('#myModalLabel').text(title);
		$("#box_model").find('.modal-body').html('').html('<iframe class="iframe-body" frameborder="0" width="100%" height="500" src="'+link_href+'"></iframe>');
		$('.iframe-body').attr({"src":link_href});
		$("#box_model").modal('toggle');
	}
</script>

	</div>

	<div class="specListInd_bg" id="specListInd_bg"></div>
	<div class="specListInd" id="specListInd">
		<div class="ht">
			<span>免费报名</span>
			<a href="javascript:;" class="close fr">×</a>
		</div>
		<p class="tips">请必须填写正确信息，以便我们更好的为您服务！</p>

		<form method="post" action="?c=post&amp;f=setok&amp;module_id=132" onsubmit="return specListInd_submit();">
			<input type="hidden" id="tourl" name="tourl" value="goback">
			<input type="hidden" id="tomsg" name="tomsg" value="预约成功，我们将通过电话联系您！">
			<input type="hidden" id="subject" name="subject" value="">
			<input type="hidden" id="spec" name="spec" value="">
			<div class="table ext cls_contact">
				<div class="left">
					<span class="red">*</span>
					真实姓名：
				</div>
				<div class="right">
					<div>
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="contact" id="contact" style="width:180px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table ext cls_phone">
				<div class="left">
					<span class="red">*</span>
					联系电话：
				</div>
				<div class="right">
					<div>
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="phone" id="phone" style="width:180px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table ext cls_house">
				<div class="left">楼盘地址：</div>
				<div class="right">
					<div>
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="house" id="house" style="width:180px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="left">
					<span class="red">*</span>
					验证码：
				</div>
				<div class="right">
					<input name="sys_check" id="sys_check" type="text" class="input-text" style="width:90px;">
					<img id="imgcode" src="images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" border="0" align="top"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="images/php.htm"></script>
		<script type="text/javascript">
		function specListInd_submit(){
			var specList_contact = $(".specListInd #contact");
			if(!specList_contact.val()){
					alert("请输入您的称呼");
					specList_contact.focus();
					return false;
			}
			var specList_phone = $(".specListInd #phone");
			if(!(/^1[3|5|8][0-9]\d{7,8}$/.test(specList_phone.val()))){
					alert("手机号码未填写或填写错误");
					specList_phone.focus();
					return false;
			}
			var specList_check = $(".specListInd #sys_check");
			if(!specList_check.val()){
					alert("请输入验证码");
					specList_check.focus();
					return false;
			}
			getid("_phpok_submit").disabled = true;
			return true;
		}
		</script>
		<script type="text/javascript"></script>
	</div>
	<div class="hr30"></div>

	<!-- /主体 -->
<?php get_footer(); ?>