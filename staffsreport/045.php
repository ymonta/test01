<?php 
include_once('./_include/common.php');
$__cN = 45;
$__cT = 'お茶っコ日和が単行本になりました！';
$__cD = 'September 23th, 2005';
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

<?php p('p1.jpg', 'c', '刷り上ったばかりの『旅と小鳥と金木犀』です！'); ?>

　みなさんこんにちは。シャオメイでございます！ 
中秋の名月も過ぎ、日々秋らしくなってきました。いかがお過ごしですか？ 
さて、今年もいしらさんの本が出版されます。その名も『旅と小鳥と金木犀 天然日和２』。そうです！ ロングセラー『天然日和』の第二弾として、2002年の秋から200
4年の冬にかけて幻冬舎のウエブマガジンに連載されていた『お茶っコ日和』が単行本になったのです。<BR>

<?php p('p2.jpg', 'c', 'カバーを外すとこんな感じ。かわいいでしょ？'); ?>
<?php p('p3.jpg', 'c', '今日は寒いのでホットミルクを飲んでいます'); ?>

　「『天然日和』に引き続き、同じスタッフで作りました。とてもかわいい本に仕上がっています。半透明のカバーを取った状態がとても好き」といしらさん。『旅と小鳥と金木
犀』というタイトルは、本の中に書かれている言葉の中から、いしらさん自身が響きのいい言葉を選んで付けたそう。「そろそろキンモクセイの季節なのでちょうどいいなと思っ
て。よかったら、みなさんのくつろぎの時間にぜひ読んでください！」（いしら談）<BR>

<?php p('p4.jpg', 'c', 'ちょっと日焼けしたいしらさん。くつろぎのカフェタイム'); ?>

　今回は写真がカラーで掲載されているほか、書き下ろしとして、いしらさんのあとがきがそえられています。３年前、ちょうどこのホームページが立ち上がった頃から昨年冬ま
でのいしらさんの日常を、ぜひ単行本でご覧になってください！ 
以上、シャオメイがお伝えしました。

</p>

<p>
<?php p('p5.jpg', 'c', ''); ?>

<A href="http://shop.gentosha.co.jp/" target="_blank">『旅と小鳥と金木犀 天然日和２』</A><br>
日常のささやかな出来事を、独特の感性と文体でつづった、ユーモラスで温かみあふれる日記エッセイ第２弾！<BR>
定価（本体1400円＋税）<BR>
幻冬舎より9月26日発売！

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
