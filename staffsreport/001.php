<?php 
include_once('./_include/common.php');
$__cN = 1;
$__cT = 'いしらさんのエッセイ集『天然日和』';
$__cD = 'September 20th, 2002';
?>

<?php

$pArr = array(
	 array('p1.jpg', 'XXX')
	,array('p2.jpg', 'XXX')
	,array('p3.jpg', 'XXX')
	,array('p4.jpg', 'XXX')
	,array('p5.jpg', 'XXX')
	,array('p6.jpg', 'XXX')
	,array('p7.jpg', 'XXX')
	,array('p8.jpg', 'XXX')
	,array('p9.jpg', 'XXX')
	,array('p10.jpg', 'XXX')
	,array('p11.jpg', 'XXX')
	,array('p12.jpg', 'XXX')
	,array('p13.jpg', 'XXX')
	,array('p14.jpg', 'XXX')
	,array('p15.jpg', 'XXX')
);

pFix($pArr);
?>

<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('./_include/header_meta.php'); ?>
</head>
<body>
  <?php include_once('./_include/bgm.php'); ?>
  <div id="windowArea">
    <a class="anq" id="_top" name="_top">&nbsp;</a>
    <?php include_once('./_include/header2.php'); ?>
    <div id="mainArea" class="typeB typeNews alp0">
      <div class="main">
      <div class="mainHeader">
        <h3>#<?php echo $__cN; ?></h3>
        <h2><?php echo $__cD; ?></h2>
        <h1><?php echo $__cT; ?></h1>
      </div><!-- /mainHeader -->
      <div class="mainBody clearfix">

<p>

みなさん、はじめまして。<br>
わたくしニュース担当の小美と書いてシャオメイと申します。いしらさん（わたくしはこう呼んでいるのです）の撮影現場などにカメラ片手に
潜入、ばっちり取材して、みなさんにお伝えしていきたいと思いますので、末永くよろしくお願いいたします。<br>

　さて、第一回目の今回は、先日発売された、いしらさんのエッセイ集『天然日和』をご紹介します。<BR>

<?php p('p1.jpg', 'c', ''); ?>

　『天然日和』みなさんはもうお読みになりましたか？ 
まだご存じないという方のために、簡単なご説明を。この本は、いしらさんが昨年春から今年の春まで、幻冬舎のWebマガジンで連載していた『おぉ、素晴らしき日常』に書き
下ろしエッセイを加えたもので、いしらさんにとっては二冊目のエッセイ集になります。とってもかわいい表紙なので、本屋さんで見かけた際には、ぜひ手にとってみてください
。ものすごく厚い(358ページもあるのだ！)のですが、ハードカバーではないので、気軽に読める一冊です。いしらさんが日々の日常を、自分の感じたことを、ありのままに
書き連ねたこの本には、テレビなどでは見られない、素のいしらさんがいっぱいいっぱい詰まっています。読んでくださった方、感想などをぜひ掲示板やメールでお知らせくださ
いね。お待ちしています！ 
しかもっ。この秋から再び、“Wｅｂマガジン幻冬舎”でいしらさんの連載が始まりました。そちらもぜひ読んでください！！<BR>

<?php p('p2.jpg', 'c', ''); ?>

　さてさて、この秋、いしらさんは10月10日スタートの、木曜ドラマ『薔薇の十字架』（フジテレビ／毎週木曜よる10時放送）に出演します。今回は主婦の役だそうです。
それと、来年お正月公開の映画『黄泉がえり』の撮影も始まります。もちろん、それらの撮影情報は、このNewsでご報告していきます！<br>次回はドラマの撮影現場に潜
入する予定ですので、お楽しみに！
</p>

      </div><!-- /mainBody -->
      <?php include_once('./_include/mainFooter.php'); ?>
      <div id="copyrightBlock">
        <img src="/images/copyright_01.png" alt="copyright (c) Yuriko Ishida All rights reserved."/>
      </div><!-- /copyrightBlock -->
    </div><!-- /main -->
  </div><!-- /mainArea -->
  <?php include_once('../_include/nav.php'); ?>
</div><!-- /windowArea -->
<?php include_once('./_include/backnumber.php'); ?>
<?php include_once('../_include/footer_meta.php'); ?>
</body>
</html>
