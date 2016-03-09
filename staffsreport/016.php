<?php 
include_once('./_include/common.php');
$__cN = 16;
$__cT = 'いしらさん、ニューヨークへ行くの巻';
$__cD = 'January 29th, 2003';
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

<?php p('p1.jpg', 'c', 'NYに到着！'); ?>

　みなさん、こんにちは。シャオメイでございます。今年は例年以上にインフルエンザが猛威を振るっているようです。みなさんは大丈夫ですか？ 
くれぐれも気をつけてくださいね。<BR>

<?php p('p2.jpg', 'c', 'これから撮影で～す'); ?>

　さてさて。先日更新したfrom Yurikoやメディア・インフォでもお伝えしましたが、WOWOWで放送されるグラミー賞授賞式の生放送の司会を、いしらさんが務め
ることになりました！ 
先日お伝えした年明け早々のNY行きはこのお仕事だったのです。とはいえ、グラミー賞本番は2月24日。今回のNY行きは、当日の生番組に先立って放送される『グラミー・
バック・トゥ・ＮＹ』というミニ番組の収録。もちろん、一緒に司会される松任谷正隆さんもご一緒です。<BR>

<?php p('p3.jpg', 'c', '雪が降ってまいりました'); ?>
<?php p('p4.jpg', 'c', '池の近くって特に寒そう'); ?>
<?php p('p5.jpg', 'c', '場所を変えて、また撮影'); ?>
<?php p('p6.jpg', 'c', '消防署でも撮影しました'); ?>

　『グラミー・バック・トゥ・ＮＹ』は、ミニ番組とはいえ、2月1日から2月23日まで連日放送される番組です。しかも、毎日違った内容をお伝えするということで、おふた
りは23本分の収録をNYのあちらこちらで行ってきたそうです。もちろん打ち合わせや簡単なリハーサルは行いますが、ライブ感を大切にするために、本番は1回きり。移動日
を除く短い滞在期間はお天気も悪く、雨や雪が降る中での収録となりましたが、とてもいいものが撮れたようですよ。この番組を毎日観れば、グラミー賞の予習はばっちり！ 
しかも、普段あまり目にすることのない、女優石田ゆり子とは少し違ったいしらさんに会えるかもしれません。<BR>

<?php p('p7.jpg', 'c', 'つかの間の晴れ間。太陽の光がなんだか後光みたい'); ?>
<?php p('p8.jpg', 'c', 'グラウンド・ゼロの前で'); ?>

　今回が５回目、約二年ぶりのNYといういしらさんにとって、この街は“常にパワフルで刺激的な場所”なのだとか。「目標がある人にとってはとても楽しい場所だけれど、な
んとなく来てしまった人にはパワーがありすぎてつらい場所だと思う。そのパワーは、香港にも通じるところがあるような気がします。私にとっては、どちらも好きな場所です」
と言ういしらさん、2月に再びNYを訪れるのをいまから楽しみにしているそうです。一緒に行けない私は、テレビの前で番組を楽しむ予定でございます。みなさんもぜひご覧に
なってくださいね！

<?php p('p9.jpg', 'c', '日本から同行した取材陣から取材を受けるおふたり'); ?>
<?php p('p10.jpg', 'c', 'ブルックリン ブリッジ'); ?>
<?php p('p11.jpg', 'c', 'いしらさん、このギブソンJ-200にひと目惚れ！'); ?>
<?php p('p12.jpg', 'c', 'とても愛しそうに弾くいしらさん'); ?>

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
