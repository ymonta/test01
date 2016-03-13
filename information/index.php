<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="robots" content="index, follow" />
<meta name="title" content="Information | Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta name="description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta name="keywords" content="yuriko,ishida,いしだゆりこ,石田,いしだ,石田ゆり子,石田百合子,百合子" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta property="og:title" content="Information | Yuriko Ishida Official Homepage" />
<meta property="og:type" content="eventregist:event" />
<meta property="og:image" content="/images/logoFacebook.gif" />
<meta property="og:site_name" content="Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta property="og:description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta property="og:url" content="http://yuriko-ishida.com/information/" />
<meta property="fb:app_id" content="1542350962761125" />
<title>Information | Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen,print" href="/css/common.css" />
<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet" type="text/css" />
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

	setMainTop();
	$(window).bind('resize',function(){
		setMainTop();
	});
	
	$('#mv_ani').bind('load',function(){
		setMainTop();
	});
		
	$('#mv_h1').queue([]).fadeTo(1000,1);
	$('#mv_p').queue([]).delay(700).fadeTo(3000,1);
	$('#infoList').queue([]).delay(1300).fadeTo(1500,1);
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



<div id="windowArea">
    <a class="anq" id="_top" name="_top">&nbsp;</a>
    <div id="header2" class="information">
      <p class="alp0" id="mv_p"><img src="/information/images/siphon_ani_b_01.gif" id="mv_ani" class=""></p>
      <h1 class="alp0" id="mv_h1"><img src="./images/title_01.png" alt="INFORMATION"></h1>
    </div><!-- /header2 -->

  <div id="mainArea" class="typeB">
    <div class="main">

<div class="infoList alp0" id="infoList">
<ul class="listA">
  <li>
    <h3>February 29th, 2016</h3>
    <h2>更新情報</h2>
    <p class="w1"><a href="/staffsreport/">
    Staff's Report を更新しました！
    </a></p>
  </li>
  <li>
    <h3>January 26th, 2016</h3>
    <h2>テレビドラマ出演情報</h2>
    <p class="w1">
    ４月１５日（金）スタート、毎週金曜よる１０時放送、ＮＨＫドラマ１０「コントレール～罪と恋～」に主演します。お楽しみに！
    </p>
  </li>
  <li>
    <h3>January 1st, 2016</h3>
    <h2>更新情報</h2>
    <p class="w1"><a href="/message/">FROM YURIKOを更新しました！</a></p>
  </li>
  
</ul>
</div><!-- /infoList -->

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
