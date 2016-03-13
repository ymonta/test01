<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="robots" content="index, follow" />
<meta name="title" content="Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta name="description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta name="keywords" content="yuriko,ishida,いしだゆりこ,石田,いしだ,石田ゆり子,石田百合子,百合子" />
<meta property="og:title" content="Yuriko Ishida Official Homepage" />
<meta property="og:type" content="eventregist:event" />
<meta property="og:image" content="/images/logoFacebook.gif" />
<meta property="og:site_name" content="Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta property="og:description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta property="og:url" content="http://yuriko-ishida.com/" />
<meta property="fb:app_id" content="1542350962761125" />
<title>Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen,print" href="/css/common.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/js/jquery.easie.js"></script>
<script src="/js/common.js"></script>
<script type="text/javascript">
$(function() {
	__bgmTgt = $('#bgm');
	__bgmTgt[0].load();
	__bgmTgt[0].play();
	__seTgt = $('#se');
	__seTgt[0].load();
	
	$('#_header,#d_0,#_footer').css({'opacity':0});
	$('#mainArea').show();
	$('#mv_1').load(function(){
		setDoorPos();
	});
	setDoorPos();
	
	$('#_header').animate({'opacity':1},2000);
	$('#d_0').delay(500).animate({'opacity':1},2000);
	$('#_footer').delay(500).animate({'opacity':1},2500,function(){
		setDoorPos();
	});
	$(window).bind('resize',function(){
		setDoorPos();
	});

	$('#d_0').bind('click',function(){
		__seTgt[0].play();
		$(this).children('img').attr({'src':'/images/door_ani_01.gif'});
		setTimeout(nextStage, 2500);
	});
});

</script>
</head>
<body>
<audio loop id="bgm">
  <source src="/sound/bgm.m4a" type="audio/aac" id="bgm_1">
  <source src="/sound/bgm.mp3" type="audio/mp3" id="bgm_2">
  <source src="/sound/bgm.ogg" type="audio/ogg" id="bgm_3">
</audio>
<audio id="se">
  <source src="/sound/DoorOpen.m4a" type="audio/aac" id="se_1">
  <source src="/sound/DoorOpen.mp3" type="audio/mp3" id="se_2">
  <source src="/sound/DoorOpen.ogg" type="audio/ogg" id="se_3">
</audio>

<div id="windowArea">
<div id="mainArea">
	<div class="header" id="_header">
    <h1><img src="/images/title_01.png" alt="YURIKO ISHIDA OFFICIAL HOMEPAGE"></h1>
    <h2><img src="/images/since_01.png" alt="Since 2002 September."></h2>
  </div>
  <div class="main" id="_main">
    <div id="doorMovie">
      <a id="d_0" href="javascript:void(0)"><img src="/images/door_start_01.png" id="mv_1"></a>
      <p><img src="/images/door_spc_02.png"></p>
    </div>
  </div>
  <div class="footer" id="_footer">
    <p class="copyright">
      <img src="/images/copyright_01.png" alt="copyright (c) Yuriko Ishida All rights reserved." id="copyright"/>
    </p>
  </div>
</div>
</div><!-- / -->
</body>
</html>
