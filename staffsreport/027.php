<?php 
include_once('./_include/common.php');
$__cN = 27;
$__cT = 'いしらさん、メレンゲとマシューで大笑いの巻';
$__cD = 'October 18th, 2003';
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

<?php p('p1.jpg', 'c', '楽屋にて。本番前って大忙しなのです'); ?>

　みなさん、こんにちは。シャオメイでございます。いしらさんのお誕生日、本の発売、サイン会、はなまるカフェ出演などなどで、BBSが賑やかな今日この頃ですが、みなさ
んお元気ですか？ 
朝夕が冷え込むようになったからか、ちょっと風邪が流行っているようですので、お気をつけくださいね。<BR>

<?php p('p2.jpg', 'c', 'メレンゲ出演の衣装は『PHLOSOPHY DI ALBERTA FERRETTI』'); ?>
<?php p('p3.jpg', 'c', 'テレビ朝日の新社屋の楽屋は、いろんな意味ですごかった…'); ?>
<?php p('p4.jpg', 'c', '後ろの手は誰？'); ?>

　今回のNewsは、10月18日放送の『メレンゲの気持ち』と、10月22日放送の『Matthew's Best Hit TV』です（放送日時は地方によって異なり
ますので、関東地区以外の方は、テレビ雑誌やテレビ局のHPなどでご確認ください）。『メレンゲ〜』では、モンゴルからのお土産を持って登場したいしらさん。久本さんをは
じめ、みなさんとても喜んでくださり、ちょっと緊張気味だったいしらさんも、すっかり笑顔に。“メレンゲ写真館”では写真だけでなく、ホームビデオも公開しちゃいますので
、お楽しみに！<BR>

<?php p('p5.jpg', 'c', 'マシュー出演の衣装は、『BLUMARINE/ANNA MOLINARI』。いしらさん、朝からテンション上がり気味!?'); ?>
<?php p('p6.jpg', 'c', '待ち時間に、現在撮影中のドラマ『向田邦子の恋文』の台本を読み込むいしらさん'); ?>
<?php p('p7.jpg', 'c', 'ちょっと休憩中'); ?>

　そして、二回目の出演となる『Matthew's〜』では、同番組の人気コーナー“マシューケイタリング”に出演。レミさんに「秋のビックリごはん」を作っていただきま
した。マシュー曰く、マシューといしらさんは幼なじみだそうで、朝からの収録だったにもかかわらず、マシューのテンションの高さに、いしらさんもかなりのハイテンションで
応じていましたよ。特に、番組が用意した、マシューやスタッフからのリクエストが入った“ゆりっぺBOX”のリクエストに、照れながらも応えるいしらさん、本当に必見です
。かなり貴重な映像ですのでお見逃しなく！ 
以上、シャオメイがお伝えしました。

<?php p('p8.jpg', 'c', 'これが、番組が用意してくれた“ゆりっぺBOX”'); ?>

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
