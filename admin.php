<?php
/**********************************************
/	Yahoo ID: gorz1872@yahoo.com
*/


include_once("GameEngine/Account.php");
if($session->access != ADMIN) { 
	echo "ليس لديك صلاحية لدخول هاذه الصفحه."; 
} 
else{
if(!isset($_GET['tid'])){
	$_GET['tid'] = 0;
}
include "Templates/html.tpl";  ?>

<body class="v35 webkit chrome statistics">
<!--<div id="villageList" style="
    min-height: 280px;
    padding-top:22px;
    background-color: white;
    bottom: 0;
    left: 0;
    max-height:400px;
    min-width:250px;
    position: fixed;
    z-index: 1;
">
<div style="overflow:scroll;padding:5px;height:380px;">
<?php
//error_reporting(0);

?>
</div>
</div>-->
	<div id="wrapper"> 
		<img id="staticElements" src="img/x.gif" alt="" /> 
		<div id="logoutContainer"> 
			<a id="logout" href="logout.php" title="<?php echo LOGOUT; ?>">&nbsp;</a> 
		</div> 
		<div class="bodyWrapper"> 
			<img style="filter:chroma();" src="img/x.gif" id="msfilter" alt="" /> 
			<div id="header"> 
				<div id="mtop">
					<a id="logo" href="<?php include("adress.txt")?>" target="_blank" title="<?php echo SERVER_NAME ?>"></a>
					<ul id="navigation">
						<li id="n1" class="resources">
							<a class="" href="dorf1.php" accesskey="1" title="<?php echo HEADER_DORF1; ?>"></a>
						</li>
						<li id="n2" class="village">
							<a class="" href="dorf2.php" accesskey="2" title="<?php echo HEADER_DORF2; ?>"></a>
						</li>
						<li id="n3" class="map">
							<a class="" href="karte.php" accesskey="3" title="<?php echo HEADER_MAP; ?>"></a>
						</li>
						<li id="n4" class="stats">
							<a class=" active" href="statistiken.php" accesskey="4" title="<?php echo HEADER_STATS; ?>"></a>
						</li>
<?php
    	if(count($database->getMessage($session->uid,7)) >= 1000) {
			$unmsg = "+1000";
		} else { $unmsg = count($database->getMessage($session->uid,7)); }
		
    	if(count($database->getMessage($session->uid,8)) >= 1000) {
			$unnotice = "+1000";
		} else { $unnotice = count($database->getMessage($session->uid,8)); }
?>
<li id="n5" class="reports"> 
<a href="berichte.php" accesskey="5" title="<?php echo HEADER_NOTICES; ?><?php if($message->nunread){ echo' ('.count($database->getMessage($session->uid,8)).')'; } ?>"></a>
<?php
if($message->nunread){
	echo "<div class=\"ltr bubble\" title=\"".$unnotice." ".HEADER_NOTICES_NEW."\" style=\"display:block\">
			<div class=\"bubble-background-l\"></div>
			<div class=\"bubble-background-r\"></div>
			<div class=\"bubble-content\">".$unnotice."</div></div>";
}
?>
</li>
<li id="n6" class="messages"> 
<a href="nachrichten.php" accesskey="6" title="<?php echo HEADER_MESSAGES; ?><?php if($message->unread){ echo' ('.count($database->getMessage($session->uid,7)).')'; } ?>"></a> 
<?php
if($message->unread) {
	echo "<div class=\"ltr bubble\" title=\"".$unmsg." ".HEADER_MESSAGES_NEW."\" style=\"display:block\">
			<div class=\"bubble-background-l\"></div>
			<div class=\"bubble-background-r\"></div>
			<div class=\"bubble-content\">".$unmsg."</div></div>";
}
?>
</li>

</ul>
<div class="clear"></div> 
</div> 
</div>
					<div id="mid">

												<div class="clear"></div> 
<div id="contentOuterContainer"> 
<div class="contentTitle">&nbsp;</div> 
    <div class="contentContainer"> 
								



<div id="content" class="statistics">
                                		<script type="text/javascript"> 
					window.addEvent('domready', function()
					{
						$$('.subNavi').each(function(element)
						{
							new Travian.Game.Menu(element);
						});
					});
				</script>

<h1 class="titleInHeader">مدیریت<?php if($session->access == ADMIN) { echo " <a href=\"\"></a>"; } ?></h1>
<div class="contentNavi subNavi">
<div title="" <?php if(isset($_GET['tid']) && ($_GET['tid'] == 0)) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div>
					<div class="content"><a href="admin.php"><span class="tabItem">مدیریت</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && ($_GET['tid'] == 1)) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=1"><span class="tabItem">بخش 1</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && $_GET['tid'] == 2) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=2"><span class="tabItem">بخش 2</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && $_GET['tid'] == 3) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=3"><span class="tabItem">بخش 3</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && $_GET['tid'] == 4) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=4"><span class="tabItem">بخش 4</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && $_GET['tid'] == 5) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=5"><span class="tabItem">بخش 5</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && $_GET['tid'] == 6) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=6"><span class="tabItem">بخش 6</span></a></div> 
				</div> 
				<div title="" <?php if(isset($_GET['tid']) && $_GET['tid'] == 7) { echo "class=\"container active\""; } else { echo "class=\"container normal\""; } ?>> 
					<div class="background-start">&nbsp;</div> 
					<div class="background-end">&nbsp;</div> 
					<div class="content"><a href="?tid=7"><span class="tabItem">بخش 7</span></a></div> 
				</div> 
								
				<div class="clear"></div>
			</div>
<?php
function Convertnumber2farsi($srting){
        $num0="&#1776;";
        $num1="&#1777;";
        $num2="&#1778;";
        $num3="&#1779;";
        $num4="&#1780;";
        $num5="&#1781;";
        $num6="&#1782;";
        $num7="&#1783;";
        $num8="&#1784;";
        $num9="&#1785;";

        $stringtemp="";
        $len=strlen($srting);
        for($sub=0;$sub<$len;$sub++)
        {
         if(substr($srting,$sub,1)=="0")$stringtemp.=$num0;
         elseif(substr($srting,$sub,1)=="1")$stringtemp.=$num1;
         elseif(substr($srting,$sub,1)=="2")$stringtemp.=$num2;
         elseif(substr($srting,$sub,1)=="3")$stringtemp.=$num3;
         elseif(substr($srting,$sub,1)=="4")$stringtemp.=$num4;
         elseif(substr($srting,$sub,1)=="5")$stringtemp.=$num5;
         elseif(substr($srting,$sub,1)=="6")$stringtemp.=$num6;
         elseif(substr($srting,$sub,1)=="7")$stringtemp.=$num7;
         elseif(substr($srting,$sub,1)=="8")$stringtemp.=$num8;
         elseif(substr($srting,$sub,1)=="9")$stringtemp.=$num9;
         else $stringtemp.=substr($srting,$sub,1);

        }
	return   $stringtemp;

}
if(isset($_GET['tid']) && ($_GET['tid'] == 0)) {			
?>
<h4 class="round">نظرة عامة</h4>
<center><b>*** تعليمات ***</b></center>
<br>
<a href="?tid=1"><b>1. الصفحة <?php echo Convertnumber2farsi(1); ?></b></a>
<br>
وهذا يشمل توزيع الميداليات والكتابة عامة، أخبار عامة، إعدادات الإصلاحات، وإغلاق التسجيل، والإعدادات وإصلاح الأخطاء بطل النقش هو.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=2"><b>2. الصفحة <?php echo Convertnumber2farsi(2); ?></b></a>
<br>
ويغطي جميع الخيارات الإدارية والقانونية المتعلقة اللاعبين، والتي على سبيل المثال يمكن تسمية الطاقة و...
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=3"><b>3. الصفحةالصفحة <?php echo Convertnumber2farsi(3); ?></b></a>
<br>
يحتوي هذا القسم على جميع الخيارات المتعلقة إعدادات خادم الإعدادات العامة والخيارات زائد هو الإعلان
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=4"><b>4. الصفحة <?php echo Convertnumber2farsi(4); ?></b></a>
<br>
هذا يتضمن خيارات للاعبين
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=5"><b>5. الصفحة <?php echo Convertnumber2farsi(5); ?></b></a>
<br>
يحتوي هذا القسم على الخيارات المتعلقة الرسائل والتقارير.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=6"><b>6. الصفحة <?php echo Convertnumber2farsi(6); ?></b></a>
<br>
وهنا يمكن اضافة اغراض البطل الى المزاد.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=7"><b>7. الصفحة <?php echo Convertnumber2farsi(7); ?></b></a>
<br>
يمكنك اضافة الذهب والفضه للاعبين.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ


<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 1)) {
?>
<h4 class="round">الصفحة <?php echo Convertnumber2farsi(1); ?></h4>
<center><b>خيارات</b></center>
<br>

<br>
<a href="Mssg.php"><b>1. أخبار عامة</b></a>
<br>
يمكنك استخدام هذا الخيار تكون قادرة على عرض الأخبار لجميع اللاعبين
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="Mass.php"><b>2. إرسال اخبار</b></a>
<br>
استخدم هذا الخيار لجميع اللاعبين في الوقت نفسه أن تكون قادرة على تقديم
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="maintenanceset.php"><b>3.  خيارات إصلاح</b></a>
<br>
هنا يمكنك ايقاف السيرفر اوقات الصيانه الخخ.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="registercl.php"><b>4.  ايقاف التسجيل</b></a>
<br>
هنا يمكنك ايقاف التسجيل او فتح التسجيل عند الايقاف لن يتمكن احد من التسجيل.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="Artefact.php"><b>5.ضبط المخطوطات</b></a>
<br>
في هاذا القسم يمكنك تعديل التحف .
<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 2)) {
?>
<h4 class="round">الصفحة <?php echo Convertnumber2farsi(2); ?></h4>
<center><b>گزینه ها</b></center>
<br>
<a href="onlinerep.php"><b>1. قائمة اللاعبين المتصلين</b></a>
<br>
هنا يمكنك مشاهده الاعبين الموجودين وتعديل ملفهم الشخصي.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="report.php"><b>2. الاعبين المسجلين</b></a>
<br>
هنا يمكنك مشاهدة الاعبين المسجلين في السيرفر وتعديل ملفهم الشخصي.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="plogin.php"><b>3. دخول قرية الاعب ومن الضروري ادخال اسمه</b></a>
<br>
هنا يمكنك دخول قراء الاعبين ..
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="reports2.php"><b>3. معلومات السيرفر</b></a>
<br>
انظر عائدات السيرفر..
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>


<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 3)) {
?>
<h4 class="round">الصفحة <?php echo Convertnumber2farsi(3); ?></h4>
<center><b>خيارات</b></center>
<br>
<a href="new.php"><b>1. تغيير الاخبار</b></a>
<br>
هنا يمكنك تعديل الاخبار في واجهة السيرفر.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="managenews.php"><b>2. ادارة الاخبار</b></a>
<br>
هنا يمكنك تفعيل او ايقاف الاخبار.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="conf.php"><b>3. تغيير كونفق السيرفر</b></a>
<br>
هنا يمكنك التعديل على السيرفر مثال السرعة وما شابه.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="peace.php"><b>4. يوم السلام</b></a>
<br>
مع هذا الخيار إذا كنت قادرا على تغيير الإعدادات ليوم السلام.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="ads.php"><b>5. نظام الإعلان</b></a>
<br>
في هذا القسم يمكنك تعيين خيارات المتعلقة بالدعاية.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="pitems.php"><b>6. البلاس</b></a>
<br>
في هذا القسم يمكنك تغيير إعدادات خيارات زائد.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ

<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 4)) {
?>
<h4 class="round">الصفحة <?php echo Convertnumber2farsi(4); ?></h4>
<center><b>گزینه ها</b></center>
<br>
<a href="email.php"><b>1. إرسال رسالة خاصة إلى لاعبين</b></a>
<br>
مع هذا الخيار يمكنك إرسال بريد إلكتروني لجميع اللاعبين  بنقره واحد .
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="emailbk.php"><b>2. جمع رسائل البريد الإلكتروني</b></a>
<br>
مع هذا الخيار كنت قادرا على جمع رسائل البريد الإلكتروني في صيغتين لاعبين .txt و .zip سيكون.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="rep.php"><b>3. خادم تقرير</b></a>
<br>
مع هذا الخيار يمكنك رؤية قائمة كاملة من اللاعبين وسيتم إرسالها إلى قائمة البريد الإلكتروني.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="newsletter.php"><b>4. النشرة الإخبارية</b></a>
<br>
مع هذا الخيار سوف تكون قادرا على إرسال الرسائل الإخبارية.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ

<br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 5)) {
?>
<h4 class="round">الصفحة <?php echo Convertnumber2farsi(5); ?></h4>
<center><b>خيارات</b></center>
<br>
<a href="payam.php"><b>1. خادم</b></a>
<br>
هنا يمكنك مشاهدة جميع الرسائل.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="repo.php"><b>2. تقارير خادم</b></a>
<br>
هنا يمكنك مشاهدة جميع تقارير الاعبين.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ


<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 6)) {
include "./addauction.php";
?>









<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 7)) {
include "./editcredits.php";
};
?>



</div>
<div id="side_info" class="outgame">
</div>
</div>
<div class="contentFooter">&nbsp;</div>

</div>
<?php
include("Templates/sideinfo.tpl");include("Templates/footer.tpl");include("Templates/header.tpl");include("Templates/res.tpl");include("Templates/vname.tpl");include("Templates/quest.tpl");

?>

</div>
<div id="ce"></div>
</div>
</body>
</html>



<?php } ?>
