<?php
/**********************************************
/	Yahoo ID: gorz1872@yahoo.com
*/


include_once("GameEngine/Account.php");
if($session->access != ADMIN) { 
	echo "شما ادمین نیستید لطفا تلاش نکنید."; 
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
<h4 class="round">دید کلی</h4>
<center><b>*** توضیحات ***</b></center>
<br>
<a href="?tid=1"><b>1. بخش <?php echo Convertnumber2farsi(1); ?></b></a>
<br>
این بخش شامل توزیع مدال ها،ارسال نامه عمومی، ارسال خبر عمومی، تنظیمات تعمیرات ,بستن ثبت نام, تنظیمات کتیبه ها و رفع باگ قهرمان میباشد.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=2"><b>2. بخش <?php echo Convertnumber2farsi(2); ?></b></a>
<br>
این بخش شامل تمام گزینه های مجاز ادمین و مربوط به بازیکنان میباشد که برای مثال میتوان نیرو دادن و .. را نام برد.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=3"><b>3. بخش <?php echo Convertnumber2farsi(3); ?></b></a>
<br>
این بخش شامل تمام گزینه های مربوط به تنظیمات کلی سرور, تنظیمات گزینه های پلاس و  تبلیغات میباشد
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=4"><b>4. بخش <?php echo Convertnumber2farsi(4); ?></b></a>
<br>
این بخش شامل گزینه های مربوط به ایمیل بازیکنان است
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=5"><b>5. بخش <?php echo Convertnumber2farsi(5); ?></b></a>
<br>
این بخش شامل گزینه های مربوط به نامه ها و گزارشات میشود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=6"><b>6. بخش <?php echo Convertnumber2farsi(6); ?></b></a>
<br>
این بخش شامل امکان اضافه کردن جنس به حراجی میباشد.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="?tid=7"><b>7. بخش <?php echo Convertnumber2farsi(7); ?></b></a>
<br>
این بخش شامل امکان ویرایش طلا و نقره ی کاربران می باشد.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ


<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 1)) {
?>
<h4 class="round">بخش <?php echo Convertnumber2farsi(1); ?></h4>
<center><b>گزینه ها</b></center>
<br>

<br>
<a href="Mssg.php"><b>1. ارسال خبر عمومی</b></a>
<br>
با استفاده از این گزینه قادر خواهید بود تا خبری را برای تمام بازیکنان نمایش دهید
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="Mass.php"><b>2. ارسال نامه عمومی</b></a>
<br>
با استفاده از این گزینه قادر خواهید بود تا همزمان به تمامی بازیکنان نامه ارسال کنید
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="maintenanceset.php"><b>3.  تنظیمات تعمیرات</b></a>
<br>
با استفاده از این گزینه قادر خواهید بود تا سرور را به حالت تعمیرات برده و بازیکنان در این حالت قادر به بازی نخواهند بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="registercl.php"><b>4.  بستن ثبت نام</b></a>
<br>
با استفاده از این گزینه قادر خواهید بود تا ثبت نام را ببندید ویا باز کنید، اگر ثبت نام بسته باشد کسی قادر به ثبت نام نخواهد بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="Artefact.php"><b>5.تنظیمات کتیبه ها</b></a>
<br>
در این قسمت می توانید تنظیمات مربوط به کتیبه های سرور را ویرایش کنید.
<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 2)) {
?>
<h4 class="round">بخش <?php echo Convertnumber2farsi(2); ?></h4>
<center><b>گزینه ها</b></center>
<br>
<a href="onlinerep.php"><b>1. لیست بازیکنان آنلاین</b></a>
<br>
با استفاده از این گزینه شما قادر به دیدن لیست بازیکنان آنلاین بوده و همچنین میتوانید اقدام به ویرایش و اعمال تغییرات در پروفایل بازیکنان کنید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="report.php"><b>2. لیست بازیکنان</b></a>
<br>
با استفاده از این گزینه شما قادر به دیدن لیست بازیکنان بوده و همچنین میتوانید اقدام به ویرایش و اعمال تغییرات در پروفایل بازیکنان کنید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="plogin.php"><b>3. ورود به اکانت بازیکنان</b></a>
<br>
با استفاده از این گزینه شما قادر به ورود به اکانت بازیکنان هستید..
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="reports2.php"><b>3. گزارش سرور</b></a>
<br>
دیدن درامدهای سرور..
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>


<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 3)) {
?>
<h4 class="round">بخش <?php echo Convertnumber2farsi(3); ?></h4>
<center><b>گزینه ها</b></center>
<br>
<a href="new.php"><b>1. تغییر اخبار</b></a>
<br>
با استفاده از این گزینه شما قادر به اعمال تغییرات در اخبار بازی هستید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="managenews.php"><b>2. مدیریت اخبار بازی</b></a>
<br>
با استفاده از این گزینه شما قادر به مدیریت اخبار هستید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="conf.php"><b>3. تغییر در کانفیگ</b></a>
<br>
با استفاده از این گزینه شما قادر به اعمال تغییرات در کانفیگ خواهید بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="peace.php"><b>4. روز صلح</b></a>
<br>
با استفاده از این گزینه شما قادر به تغییر تنظیمات روز صلح میباشید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="ads.php"><b>5. سیستم تبلیغات</b></a>
<br>
در این قسمت می توانید گزینه های مربوط به تبلیغات را تنظیم کنید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="pitems.php"><b>6. گزینه های پلاس</b></a>
<br>
در این قسمت می توانید تنظیمات مربوط به گزینه های پلاس را تغییر دهید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ

<br><br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 4)) {
?>
<h4 class="round">بخش <?php echo Convertnumber2farsi(4); ?></h4>
<center><b>گزینه ها</b></center>
<br>
<a href="email.php"><b>1. ارسال ایمیل به بازیکنان</b></a>
<br>
با استفاده از این گزینه شما قادر به ارسال ایمیل به تمام بازیکنان تنها با یک کلیک خواهید بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="emailbk.php"><b>2. جمع آوری ایمیل ها</b></a>
<br>
با استفاده از این گزینه شما قادر به جمع آوری ایمیل های بازیکنان در دو فرمت .txt و .zip خواهید بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="rep.php"><b>3. گزارشات سرور</b></a>
<br>
با استفاده از این گزینه شما قادر به مشاهده لیست کامل بازیکنان و همچنین ارسال لیست به ایمیلتان خواهید بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="newsletter.php"><b>4. خبرنامه</b></a>
<br>
با استفاده از این گزینه شما قادر خواهید بود خبرنامه ارسال کنید.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ

<br>
<?php
}
elseif(isset($_GET['tid']) && ($_GET['tid'] == 5)) {
?>
<h4 class="round">بخش <?php echo Convertnumber2farsi(5); ?></h4>
<center><b>گزینه ها</b></center>
<br>
<a href="payam.php"><b>1. نامه ها سرور</b></a>
<br>
با استفاده از این گزینه شما قادر به مشاهده تمام نامه های سرور خواهید بود.
<br><br>
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br>
<a href="repo.php"><b>2. گزارش های سرور</b></a>
<br>
با استفاده از این گزینه شما قادر به مشاهده تمام گزارش های سرور خواهید بود.
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