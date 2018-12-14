<?php
/*
Template Name Posts: 公司简介companyOverview
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();

$current_cat = $category[0]->cat_name;

$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 65;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
    <!--模块列表-->

    <section class="zx-wrap zxfs-wrap">
        <section class="detailFr_msg">

            <article>
                <p style="text-align:center;">
                    <br></p>
                <p>
                    <span style="line-height:1.5;">
                        <br></span>
                </p>
                <p>
                    <span style="line-height:1.5;">
                        广东星艺装饰集团股份有限公司南宁集成分公司成立于1991年，是IFDA国际室内装饰协会中国区副会长单位、中国建筑装饰协会会员、中国室内设计协会会员、广东省建筑装饰协会副会长及各省市建筑装饰协会副会长、理事或会员单位。主要从事家居、别墅、婚房、办公楼、商铺、酒店的装饰设计、施工服务，同时兼营建筑材料、家具与饰品、文化传媒等产业。
                    </span>
                </p>
                &nbsp; 目前在全国各大中城市拥有500多家直属分支机构，并在香港、柏林、多伦多等地建立了工作室。星艺装饰拥有国家施工一级资质证书，国家设计乙级资质证书，于2002年通过ISO9001国际质量认证体系。22年来，星艺创造了多个行业第一：率先形成规模化服务模式，让中国家装行业的发展提前了3-5年；率先定位于“大公司”做“小家装”，以完善的服务网络及规模优势让更多市民受益；率先倡导并举办各种家装文化展，拉近业主和设计师的距离，极大地提升了中国人家居生活的品质。星艺装饰以提升人类的生活品质为使命，责无旁贷地扛起了中国家装文化的大旗。开创性的提出了“亲情空间”、“智慧空间”、“思想空间”、“文化空间”、“艺术空间”、“阳光厅”、“把家当作城市来设计”、“太和居”、“水木清华”、“设计以爱为本”等系列设计理念，以及“空间的最高境界是哲学美，哲学美是一种过程美”等空间哲学理念，刷新了国内家居设计文化、掀起了一次次的家装文化革命，引领着中国家装设计新潮流，深刻地影响着中华家居装饰文化的进程！
                <br>
                <p>
                    &nbsp; &nbsp;星艺质量锤，砸出业界经典。1999年11月，星艺率先提出了装修“质量锤”的理念承诺如果业主对工程质量不满意，尽可挥“锤”砸之，公司不惜血本来体现自身的诚信度，真正做到“用好业主毎一分钱”和“让每一个客户满意”，星艺的质量体系得到了健全。
                </p>
                <p>
                    &nbsp; &nbsp;2006年9月8日，中央电视台《新闻联播》用长达25秒的黄金时间报道了星艺独特的人才培训之道，并给予高度肯定。这一空前之举，足以令同行引颈仰视。中装协会长马挺贵先生视察星艺时高度评价星艺的行业地位，选择星艺装饰就等于选择了高品位的设计、高标准的工程质量、和高品质的服务，把“装修交给我们，您放心上班去”是5万星艺人对您的承诺。
                </p>
                <p>
                    集团为了全面服务好客户，满足各阶层客户个性化需求，在原有的高端设计机构—星艺·余工设计师楼、星艺·尚品的基础上，特成立广东星艺装饰集团股份有限公司南宁集成分公司（简称“
                    <a href="http://m.nnxyzs.com/" target="_blank">星艺集成</a>
                    ”），星艺集成是由星艺装饰集团全资打造，集设计、施工、建材销售、软装配饰为一体，为客户提供整体家装一站式服务的新模式。全案设计，定制整装，超大规模的家居体验馆，通过整合国内外一线品牌建材，去除中间环节，立省30%，均符合国家环保标准，全责售后，全程无忧，真正让客户省时、省心、省力、省钱。规范行业标准，杜绝装修“陷阱”，做到人无我有，人有我优，整装项目更多、更全面、更真实。星艺集成将继续秉承“做装修等于做朋友”的经营理念，在广西树立起“诚信装修”的旗帜，持续追求客户的满意度，以星艺强大的品牌做后盾，一流的设计理念和规范管理、精湛的施工工艺，品质保证。再次升华 “把装修交给我，您放心上班去吧！”的服务理念，做高品位人居空间文化的引导者。
                </p>
                <p>
                    <br></p>
                <p style="text-align:center;">
                    <img alt="" src="<?php bloginfo('template_directory'); ?>/images/5812b7add9bab.jpg"></p>
                <p style="text-align:center;">
                    <span style="color:#e53333;font-size:24px;"> <strong>预约
                            <a href="http://m.nnxyzs.com/" target="_blank">南宁星艺装饰</a>
                            五家门店热线：
                            <span style="color:#4c33e5;">400-0193-800</span></strong> 
                    </span>
                </p>

            </article>

        </section>

        <div class="yczxfs" id="yczxlc">

            <section class="detailFr xgtj_line">
                <header>
                    <h2>相关推荐</h2>
                </header>
                <ul>
                    <li>
                        <a href="http://m.nnxyzs.com/detail/969.html">华发国宾一号240平装修案例</a>
                    </li>
                    <li>
                        <a href="http://m.nnxyzs.com/detail/988.html">凤岭名园130平装修案例</a>
                    </li>
                    <li>
                        <a href="http://m.nnxyzs.com/detail/393.html">中铁江湾山语城150平装修案例</a>
                    </li>
                    <li>
                        <a href="http://m.nnxyzs.com/detail/567.html">盛天东郡211平装修案例</a>
                    </li>
                    <li>
                        <a href="http://m.nnxyzs.com/detail/709.html">汇东郦城140平装修案例</a>
                    </li>
                </ul>
            </section>

            <a class="module zxzs-set" dataptag="2_3_7_125" href="http://m.nnxyzs.com/" rel="nofollow">返回首页</a>

        </div>
    </section>

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