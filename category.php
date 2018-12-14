<?php
$post = $wp_query->post;
if (is_category(array('9', '10', '15'))){//视频回放
	include(TEMPLATEPATH.'/category-video.php');
} else if (is_category(array('4', '7', '8', '59'))) { //装修案例
	include(TEMPLATEPATH.'/category-renovation.php');
} else if (is_category(array('36'))) { //热装楼盘
	include(TEMPLATEPATH.'/category-hotOutfit.php');
} else if (is_category(array('37'))) { //在建工地
	include(TEMPLATEPATH.'/category-constructionSite.php');
} else if (is_category(array('5', '11', '12', '13', '14', '16'))) { //设计团队
	include(TEMPLATEPATH.'/category-designTeam.php');
} else if (is_category(array('63', '66'))) { //客户见证
	include(TEMPLATEPATH.'/category-praiseAffirmation.php');
} else if (is_category(array('60','61', '62', '84', '85', '86', '87', '88', '89'))) { //主材展厅
	include(TEMPLATEPATH.'/category-exhibitionHall.php');
} else if (is_category(array('6', '17'))) { //热点专题
	include(TEMPLATEPATH.'/category-hotTopic.php');
} else if (is_category(array('18', '19'))) { //资讯
	include(TEMPLATEPATH.'/category-information.php');
} else if (is_category(array('64'))) { //联系我们
	include(TEMPLATEPATH.'/category-information.php');
}
// else {
// include(TEMPLATEPATH.'/category-default.php');
// }
?>
