<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="robots" content="index, follow" />
<meta name="title" content="Link | Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta name="description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta name="keywords" content="yuriko,ishida,いしだゆりこ,石田,いしだ,石田ゆり子,石田百合子,百合子" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta property="og:title" content="Link | Yuriko Ishida Official Homepage" />
<meta property="og:type" content="eventregist:event" />
<meta property="og:image" content="/images/logoFacebook.gif" />
<meta property="og:site_name" content="Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ" />
<meta property="og:description" content="石田ゆり子の公式ホームページ。本人からのメッセージ,プロフィール,出演作品リスト,画像,最新情報等。" />
<meta property="og:url" content="http://yuriko-ishida.com/link/" />
<meta property="fb:app_id" content="1542350962761125" />
<title>Link | Yuriko Ishida Official Homepage | 石田ゆり子公式ホームページ</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen,print" href="/css/common.css" />
<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/common.js"></script>
<script type="text/javascript">
$(function() {
	$("html").niceScroll();
	__bgmTgt = $('#bgm');
	__bgmTgt[0].load();
	__bgmTgt[0].volume =0.5;
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
	$('#linkList').queue([]).delay(1300).fadeTo(1500,1,function(){
		setCapPos();
		$('.linkList ul li a span').fadeTo('fast',1);
	});
	$('#navBlock').queue([]).css({'bottom':'-25px'}).delay(2000).animate({'opacity':1, 'bottom':'-15px'},1500);
	$('#respNavBlock,#respNavBlock_normal,#btn_resp_pagetop').queue([]).delay(2000).animate({'opacity':1},1500);
	
	 setCapPos();
	 $(window).bind('resize',function(){
		 setCapPos();
	 });
	 
	  $('.linkList ul li a').hover(
			function(){
				$(this).fadeTo('fast',1);
			},
			function(){
				$(this).fadeTo('fast',0.6);
			}

		);
	
});
 
 function setCapPos(){
	 $('.linkList ul li a').each(function(){
		var thisH = $(this).height();
		var childH = $(this).children('span').height();
		var mT = Number(thisH - childH)/2;
		$(this).children('span').css({'padding-top':mT + 'px'});
	 });
 }
 </script>


</head>
<body>

<audio loop id="bgm">
  <source src="/sound/bgm_link.m4a" type="audio/aac" id="bgm_1">
  <source src="/sound/bgm_link.mp3" type="audio/mp3" id="bgm_2">
  <source src="/sound/bgm_link.ogg" type="audio/ogg" id="bgm_3">
</audio>



<div id="windowArea">
    <a class="anq" id="_top" name="_top">&nbsp;</a>
    <div id="header2" class="link">
      <p class="alp0" id="mv_p"><img src="./images/mv_01.png" id="mv_ani"></p>
      <h1 class="alp0" id="mv_h1"><img src="./images/title_01.png" alt="INFORMATION"></h1>
      
    </div><!-- /header2 -->
	<script>
	$(function(){
		var sTLim = $('#mainArea').position().top;
		$(window).bind('scroll touchend',function(){
			var sT = $('body').scrollTop();
			//$('#res').text(sT + ',' + sTLim);
			if(sT > sTLim){
				$('#mainAreaHeadNav').addClass('fix');
			}
			else {
				$('#mainAreaHeadNav').removeClass('fix');
			}
		});
	});
	</script>

  <div id="mainArea" class="typeB typeW">
    <div id="mainAreaHeadNav">
     <p>
      <a href="javascript:void(0)" onClick="jumpTo('#_movietv')">Movie&amp;TV</a><span>|</span>
      <a href="javascript:void(0)" onClick="jumpTo('#_cm')">CM</a><span>|</span>
      <a href="javascript:void(0)" onClick="jumpTo('#_etc')">etc.</a>
      </p>
     </div><!-- /mainAreaHeadNav -->
   
   
    <div class="main alp0" id="linkList">
      <div class="linkList" id="_movietv" name="_movietv">
        <div class="listHeader">
         <h2>Movie&amp;TV<span id="res"></span></h2>
        </div>
        <ul class="clearfix">
         <li>
           <p class="b">
             <img src="/link/images/link_01.png">
           </p>
           <p class="n">
             <img src="/link/images/link_01.png">
           </p>
           <a href="http://wwws.warnerbros.co.jp/bokumachi/" target="_blank" title="映画『僕だけがいない街』公式サイト">
             <span class="alp0">映画『僕だけがいない街』公式サイト</span>
           </a>
         </li>
         <li>
           <p class="b">
             <img src="/link/images/link_02.png">
           </p>
           <p class="n">
             <img src="/link/images/link_02.png">
           </p>
           <a href="http://www.tv-asahi.co.jp/happyretirement/" target="_blank" title="ドラマ特別企画『ハッピー・リタイアメント』公式サイト">
             <span class="alp0">ドラマ特別企画『ハッピー・リタイアメント』公式サイト</span>
           </a>
         </li>
         <li>
           <p class="b">
             <img src="/link/images/link_03.png">
           </p>
           <p class="n">
             <img src="/link/images/link_03.png">
           </p>
           <a href="http://www.fujitv.co.jp/ishitachi_no_renaijijou/" target="_blank" title="木曜劇場『医師たちの恋愛事情』公式サイト">
             <span class="alp0">木曜劇場『医師たちの恋愛事情』公式サイト</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_04.png">
           </p>
           <p class="n">
             <img src="/link/images/link_04.png">
           </p>
           <a href="http://www.itamu.jp/" target="_blank" title="映画『悼む人』公式サイト">
             <span class="alp0">映画『悼む人』公式サイト</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_05.png">
           </p>
           <p class="n">
             <img src="/link/images/link_05.png">
           </p>
           <a href="http://www.tbs.co.jp/mozu_tbs/" target="_blank" title="TBS×WOWOW共同制作ドラマ 木曜ドラマ劇場『MOZU Season２ ～幻の翼～』公式サイト">
             <span class="alp0 sizeS">TBS×WOWOW共同制作ドラマ 木曜ドラマ劇場『MOZU Season２ ～幻の翼～』公式サイト</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_06.png">
           </p>
           <p class="n">
             <img src="/link/images/link_06.png">
           </p>
           <a href="http://www.wowow.co.jp/drama/mozu_wowow/" target="_blank" title="WOWOW×TBS共同制作ドラマ『MOZU』公式サイト">
             <span class="alp0">WOWOW×TBS共同制作ドラマ『MOZU』公式サイト</span>
           </a>
         </li>

        </ul>
      </div><!-- /linkList -->

      <div class="linkList" id="_cm" name="_cm">
        <div class="listHeader">
         <h2>CM</h2>
        </div>
        <ul class="clearfix">

         <li>
           <p class="b">
             <img src="/link/images/link_07.png">
           </p>
           <p class="n">
             <img src="/link/images/link_07.png">
           </p>
           <a href="http://prtimes.jp/main/html/rd/p/000000005.000012111.html" target="_blank" title="中央住宅「POLUS（ポラス）」">
             <span class="alp0">中央住宅「POLUS（ポラス）」</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_08.png">
           </p>
           <p class="n">
             <img src="/link/images/link_08.png">
           </p>
           <a href="http://beauty.hotpepper.jp/cm/" target="_blank" title="リクルート「ホットペッパービューティー」">
             <span class="alp0">リクルート「ホットペッパービューティー」</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_09.png">
           </p>
           <p class="n">
             <img src="/link/images/link_09.png">
           </p>
           <a href="http://www.meiji.co.jp/dairies/yogurt/amicollayogurt/" target="_blank" title="明治「アミノコラーゲンヨーグルト」">
             <span class="alp0">明治「アミノコラーゲンヨーグルト」</span>
           </a>
         </li>


        </ul>
      </div><!-- /linkList -->

      <div class="linkList" id="_etc" name="_etc">
        <div class="listHeader">
         <h2>etc.</h2>
        </div>
        <ul class="clearfix">

         <li>
           <p class="b">
             <img src="/link/images/link_10.png">
           </p>
           <p class="n">
             <img src="/link/images/link_10.png">
           </p>
           <a href="http://www.1101.com/hana/" target="_blank" title="はなちゃんシリーズ。ほぼ日刊イトイ新聞">
             <span class="alp0">はなちゃんシリーズ。ほぼ日刊イトイ新聞</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_11.png">
           </p>
           <p class="n">
             <img src="/link/images/link_11.png">
           </p>
           <a href="http://www.gentosha.jp/" target="_blank" title="幻冬舎plus">
             <span class="alp0">幻冬舎plus</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_12.png">
           </p>
           <p class="n">
             <img src="/link/images/link_12.png">
           </p>
           <a href="http://www.ishidango.net/" target="_blank" title="まぁるい生活　ひかり+ごはん">
             <span class="alp0">まぁるい生活　ひかり+ごはん</span>
           </a>
         </li>

         <li>
           <p class="b">
             <img src="/link/images/link_13.png">
           </p>
           <p class="n">
             <img src="/link/images/link_13.png">
           </p>
           <a href="http://www.koaniani.com/" target="_blank" title="koaniani コアニアニ">
             <span class="alp0">koaniani コアニアニ</span>
           </a>
         </li>

<?php /**
         <li>
           <p class="b">
             <img src="/link/images/link_14.png">
           </p>
           <p class="n">
             <img src="/link/images/link_14.png">
           </p>
           <a href="http://tokyocairn.com" target="_blank" title="東京ケルン株式会社">
             <span class="alp0">東京ケルン株式会社</span>
           </a>
         </li>
**/ ?>

        </ul>
      </div><!-- /linkList -->

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
