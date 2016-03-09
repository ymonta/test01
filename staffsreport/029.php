<?php 
include_once('./_include/common.php');
$__cN = 29;
$__cT = 'ホームページオリジナル、特製カレンダーとステッカーをご紹介！';
$__cD = 'November 18th, 2003';
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

<?php p('p1.jpg', 'c', 'すべて関さんによる撮り下ろし写真。さすが関さん、すごくいい表情を見逃しません！'); ?>

　みなさん、こんにちは。シャオメイでございます。みなさん、お待たせしました！『石田ゆり子2004年版カレンダー』が遂に完成間近となりました。このカレンダーは、
『C&acute;est joli（セ・ジョリ） 
ここちいい毎日』でもステキな写真が大好評だった関さんによるオール撮り下ろし。いしらさんの愛すべき花や猫たちも登場しています。デザインはもちろん、ホームページのデ
ザインを担当してくださっているデザイナー・門田氏によるもの。日付の部分も、ほんとにかわいいんです。まるで、このホームページがそのままカレンダーになったような感じ
ですよ。
<br>

<?php p('p2.jpg', 'c', '愛猫たちも撮影に参加してくれました'); ?>

　愛猫たちも撮影に参加してくれました　ステッカーは、これまで公開したイラストの中から、いしらさんの
お気に入りをセレクト。HP上では、モノクロなことも多いフローレンスですが、ステッカーはオールカラーで、水や汚れにも強い、丈夫なビニール製となっています。シャオメ
イはこのステッカーをパソコンに貼る予定です。仕事中に行き詰ったときなんかに、フローレンスを見れば、あら不思議、肩の力が抜けそうじゃないですか？ 
というわけで、みなさんからの予約をお待ちしています。以上、シャオメイがお伝えしました！


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
