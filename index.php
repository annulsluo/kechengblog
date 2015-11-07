<!doctype html>
<?php

/** Sets up the WordPress Environment. */
require( dirname(__FILE__) . '/wp-load.php' );

add_action( 'wp_head', 'wp_no_robots' );

require( dirname( __FILE__ ) . '/wp-blog-header.php' );
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中国好课程甄选计划</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?cc4f764214cd268d41d19c00032515da";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body>

    <div class="top">
        <div class="topBar">
            <div class="area tr">
		<span class="kelanzi">“ 课篮子 ” 工程</span>
		<?php 
		if(is_user_logged_in()){ 
			$current_user = wp_get_current_user();
			echo '<span>欢迎您 , '.$current_user->user_login . '<a href="wp-admin/upload.php" class="link_blue ml20"><i class="ico_user"></i>个人中心</a>&nbsp;&nbsp;&nbsp;<a href="'.wp_logout_url("index.php") . '" title="退出">[ 退出登录 ]</a></span>'; 
		}else {
                	echo '<span class="login" ><a href="wp-signup.php">注册</a><i>|</i><a href="wp-login.php">登录</a></span>';
		} ?>
            </div>
        </div>
    </div>
    <p class="top_2"></p>
    
    <div class="main">
        <div class="area">
            <div class="tit_01"><span>“中国好课程计划”设立背景</span></div>
            <div class="cf">
                <img src="images/01.jpg" class="fl" alt="">
                <span class="fr" style="width:280px;">
                    <img src="images/02.jpg" alt="">
                    <img src="images/03.jpg" class="mt10" alt="">
                </span>
            </div>
            <div class="txt mt20">
                <p>正式启动于2001年的基础教育课程改革，是新中国成立以来教育领域最为广泛和深刻的变革，是深入实施科教兴国战略，迎接激烈国际竞争的挑战，实现面向现代化、面向世界、面向未来的战略要求，培养新世纪符合素质教育要求和时代精神的合格人才，构建具有中国特色的基础教育课程体系的必然选择。</p>
                <p>2014年3月30日，教育部以印发了《关于全面深化课程改革落实立德树人根本任务的意见》。该《意见》指出，应充分认识全面深化课程改革、落实立德树人根本任务的重要性和紧迫性；准确把握全面深化课程改革的总体要求；着力推进关键领域和主要环节改革；切实加强课程改革的组织保障。</p>
                <p>2015年3月5日，政府工作报告提出要在基础设施等领域积极推广PPP模式；财政部年度预算报告亦提出要开展PPP示范项目建设，释放社会投资潜力。 </p>
                <p>2014年11月26日，国务院发布《关于创新重点领域投融资机制鼓励社会投资的指导意见》，提出建立健全PPP机制，推广PPP模式。</p>
                <p>在教育部基础教育课程教材发展中心指导下，深圳市创新企业社会责任促进中心、北京师范大学中国教育创新研究院、深圳市教育科学研究院、深圳市慈善会联合牵头，将联合相关政府部门、教育机构、企业与社会公益组织，专项联合设立“中国好课程计划”，旨在通过PPP模式，研究、建立“中国好课程”培育体系，形成政府、企业、公益、教育的跨界合作平台， 推动教育领域多层次社会筹资生态链条的构建与中国课程改革与教育创新实践的深入落实。</p>
            </div>
            <div class="tit_01 mt100"><span>“中国好课程计划”价值</span></div>
            <div class="cf">
                <span class="fl" style="width:440px;">
                    <img src="images/04.jpg" alt="" width="440">
                    <img src="images/05.jpg" class="mt10" width="440" alt="">
                </span>
                <div class="fr txt"  style="width:520px;">
                    <p>“中国好课程计划”在可持续的公益基金支持下，探索各类有益于中国区域深化课程改革和教育创新发展的研究，探索区域教育创新与公益资本联动合作的新型模式，探索区域教育社会化合作路径。</p>
                    <p>“中国好课程计划”，在可持续的公益基金支持下，探索教育新技术趋势下课程改革深化的方向与创新的模式，探索与国际上先进课程改革经验交流与合作的模式，推动中国课程改革持续走向深入。</p>
                    <p>“中国好课程计划”可以实现社会力量助推教育创新的可持续参与模式，充分调动全社会力量关心和支持教育发展，弥补政府在专项教育领域资助的不足，推动中国基础教育资金来源的多元化，减少对政府资助的依赖，使丰富的公益资本汇聚至教育事业，推动教育新发展。</p>
                    <p>最后，“中国好课程计划”通过PPP模式在促进我国教育变革的同时，也给了诸多拥有优质课程资源和教育内容的教育企业进入中小学的机会，改变当前我国大部分教育企业特别是教育内容提供商游离于学校之外，有心进校却一直没有机会的现状，打破长期存在的教育内容“阵地”壁垒。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="declareBox" id="declareBox">
        <div class="area">
            <h4 class="tit_02">中国“好课程”的征集、申报</h4>
            <div class="txt mt20">
                <p>（一）征集对象</p>
                <p>各级各类学校、其他依法成立的教育相关机构或组织。</p><br/>
                <p>（二）申报条件</p>
                <p>申报参加“中国好课程”甄选的课程应是已开发的可供中小学使用的课程，且符合以下条件与要求：</p>
                <p>1、要体现新课改理念，符合素质教育和中小学生综合素养培养的相关要求，有明确的课程目标、授课对象与课时计划（安排），以及教材（读本、活动手册等）等。</p>
                <p>2、在内容上应无知识性和常识性错误、所涉及的事实无争议；在形式上可多样化，包括文本资料、音像制品等。</p>
                <p>3、不得存在抄袭、剽窃他人成果，侵犯他人知识产权及版权归属争议等问题。</p>
            </div>
            <h4 class="tit_03">现已开通网上报名通道<br/>申报中国“好课程”的单位或个人请下载《中国好课程申报书》填交申报</h4>
            <p>
                <a href="中国“好课程”申报书.doc" class="btn_download"><i class="ico_book"></i>申报书下载</a>
                <a href="wp-admin\media-new.php" class="btn_upload" onclick="dlg()">提交我的好课程</a>
            </p>
        </div>
    </div>

    <div class="foot">
        <div class="area flink">
            <p>
                <span class="tit">指导单位</span>
                <a href="http://ncct.moe.edu.cn/" target="_blank"><img src="images/f1.jpg" alt=""></a>
            </p>
            <p>
                <span class="tit">主办单位</span>
		<a href="http://www.cnc2049.com/" target="_blank"><img src="images/f3.jpg" alt=""></a>
                <a href="http://www.csrcn.org/" target="_blank"><img src="images/f2.jpg" alt=""></a>
                <a href="http://www.szjky.edu.cn/" target="_blank"><img src="images/f4.jpg" alt=""></a>
                <a href="http://www.szmz.sz.gov.cn/csh/" target="_blank"><img src="images/f5.jpg" alt=""></a>
            </p>
            <p>
                <span class="tit">协办单位</span>
                <img src="images/f6.jpg" alt="">
            </p>
        </div>
        <p class="area cpInfo mt20">本网站由好课乐课提供技术支持<br/>粤ICP备15093349号-1</p>
    </div>

    <p class="floatLink"><a href="#declareBox">申报书下载</a>
    <a href="#declareBox">提交我的好课程</a>
    </p>


    <div class="dlgMask"></div>
    <div class="dlgBox">
        <span class="success" >提交成功！</span>
        <span class="fail" style="display:none"><img src="images/1.png" alt="" class="mr10">失败，请重新提交</span>
    </div>
	
    <script src="js/jquery-1.7.min.js" type="text/javascript"></script>
    <script>
    function dlg () {
        //$(".dlgMask ,.dlgBox").fadeIn().delay(3000).fadeOut();
    }
    </script>
</body>
</html>
