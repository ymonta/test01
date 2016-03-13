<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="robots" content="index, follow" />
<meta name="title" content="Profile | Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta name="description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta name="keywords" content="yuriko,ishida,いしだゆりこ,石田,いしだ,石田ゆり子,石田百合子,百合子" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta property="og:title" content="Profile | Yuriko Ishida Official Homepage" />
<meta property="og:type" content="eventregist:event" />
<meta property="og:image" content="/images/logoFacebook.gif" />
<meta property="og:site_name" content="Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta property="og:description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta property="og:url" content="http://yuriko-ishida.com/profile/" />
<meta property="fb:app_id" content="1542350962761125" />
<title>Profile | Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen,print" href="/css/common.css" />
<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/js/jquery.easie.js"></script>
<script src="/js/common.js"></script>
<script src="/js/jQueryRotate.js"></script>
<script type="text/javascript">
$(function() {

	__bgmTgt = $('#bgm');
	__bgmTgt[0].load();
	__bgmTgt[0].play();
	setMainTop();
	$(window).bind('resize',function(){
		setMainTop();
	});
	$('#mv_ani').bind('load',function(){
		setMainTop();
	});
		
	$('#mv_h1').queue([]).fadeTo(1000,1);
	$('#mv_p').queue([]).delay(700).fadeTo(3000,1);
	$('#ill').queue([]).delay(1300).fadeTo(1500,1);
	$('#navBlock').queue([]).css({'bottom':'-25px'}).delay(2000).animate({'opacity':1, 'bottom':'-15px'},1500);
	$('#respNavBlock,#respNavBlock_normal,#btn_resp_pagetop').queue([]).delay(2000).animate({'opacity':1},1500);
	
});
</script>

</head>
<body>
<audio loop id="bgm">
  <source src="/sound/bgm.m4a" type="audio/aac" id="bgm_1">
  <source src="/sound/bgm.mp3" type="audio/mp3" id="bgm_2">
  <source src="/sound/bgm.ogg" type="audio/ogg" id="bgm_3">
</audio>

<?php include_once('./_include/clockModule.php');?>

<div id="windowArea">
    <a class="anq" id="_top" name="_top">&nbsp;</a>
    <div id="header2" class="profile">
      <p class="alp0" id="mv_p">
        <span class="ani">
          <img src="./images/mv_f_02.gif" id="mv_ani" class="spc">
          <img src="./images/door_close_01.png" id="mv_ani_cuckoo" class="ani">
          <span id="clockUnit">
            <span class="clockUnitIn">
              <img src="./images/hour_01.png" id="clockUnit_h">
              <img src="./images/min_01.png" id="clockUnit_m">
            </span>
          </span><!-- clockUnit-->
        </span>
      </p>
      <h1 class="alp0" id="mv_h1"><img src="./images/title_01.png" alt="INFORMATION"></h1>
    </div><!-- /header2 -->

  <div id="mainArea" class="typeB">
    <div class="main">
      <img src="/profile/images/y_ill_04.png" id="ill" class="alp0">
      <div id="copyrightBlock">
        <img src="/images/copyright_01.png" alt="copyright (c) Yuriko Ishida All rights reserved."/>
      </div><!-- /copyrightBlock -->
    </div><!-- /main -->
  </div><!-- /mainArea -->
  <?php include_once('../_include/nav.php'); ?>
</div><!-- /windowArea -->
<?php include_once('../_include/footer_meta.php'); ?>
</body>
</html>
