<?php 
include_once('./_include/common.php');
$__cN = 28;
$__cT = 'いしらさんが『SMAP×SMAP』で極道の姐さんに挑戦!?';
$__cD = 'November 7th, 2003';
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

<?php p('p1.jpg', 'c', '台詞の練習中。とっても姿勢がいいいしらさん'); ?>

　みなさん、こんにちは。シャオメイでございます。もう11月、すっかり秋も深まり、焼きイモやお鍋のおいしい季節になりました。まさに食欲の秋！ですね。<BR>

<?php p('p2.jpg', 'c', 'ちょっと得意げにポーズ。普段着のまま、この髪型というのがツボだったみたい'); ?>

　さて、今回のNewsは11月10日放送の『SMAP×SMAP』でございます。今回、いしらさんが出演するのは、おなじみ『ビストロSMAP』ではなく、新コーナー『
アクターズブレイク』。“アクター 
—— 
それは、いかなるときも自分の演技を壊さない名優”という定義に基づいた、演技勝負のコーナーなのです。中居くん、草なぎくん、香取くんの3人と、ゲストであるアクター・
いしらさんが、台本に沿って真剣な演技を披露。ですが、その途中に、ブレイクポイントが！ 
ブレイクポイントとは、台本にないアドリブポイント。ユニークなアドリブを繰り返す中居くんたち3人に対し、役を崩さず演技をまっとうできたら、いしらさんの勝利なのです
が…。<BR>

<?php p('p3.jpg', 'c', '着付け開始。着物の着付けって大変なんですよね！'); ?>
<?php p('p4.jpg', 'c', '約20分で着付けがほぼ終了。大忙しでした…'); ?>
<?php p('p5.jpg', 'c', '準備完了。すっかり姐さん、貫禄あります'); ?>
<?php p('p6.jpg', 'c', 'こ、このポーズは…'); ?>

　写真にもあるように、いしらさんが演じるのは“極道の姐さん”。最近放送されたドラマ『血脈』や『明日もおばんざい』でも着物姿を披露してくれたいしらさんですが、今回
のお着物はちょっと趣向が違います。髪型もそれ風にすると、すっかりその道の方に変身!? 
気合の入った台詞もたくさんありますよ。果たして、いしらさんは勝利を手に入れることができたのか!? 結果は、オンエアで。以上、シャオメイがお伝えしました。

<?php p('p7.jpg', 'c', 'このお着物、帯も素敵なのです'); ?>
<?php p('p8.jpg', 'c', '姐さん風に、するどい視線いただきました！'); ?>


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
