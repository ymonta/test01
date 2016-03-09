<?php 
include_once('./_include/common.php');
$__cN = 18;
$__cT = 'お問い合わせ多数、いしらさんのヘアスタイルを大分析!?';
$__cD = 'February 28th, 2003';
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

　みなさん、こんにちは。シャオメイでございます。明日からは三月。花粉が飛ぶ季節になってまいりました。いやはや。<br>

　さてさて。グラミー賞は観ていただけましたか？ 
ドレスアップしたいしらさんも美しかったですねー。ご覧になられなかった方のためにも、次回のニュースではニューヨークでのいしらさんの様子をお伝えしますよ。お楽しみに
ね。<BR>

　今回は、BBSやメールで多数お問い合わせいただいた、いしらさんのヘアスタイルについてご紹介します。<br>

<?php p('p1.jpg', 'c', 'ドレスアップのときは、毛先に動きをつけることが多いですね'); ?>
<?php p('p2.jpg', 'c', '横はこんな感じ'); ?>
<?php p('p3.jpg', 'c', '後ろはこんな感じ'); ?>

　基本は、ウルフカットの変形で、表面と毛先にゆるくパーマがかかっています。いしらさんの髪はペシャンコになってしまうのが悩みなので、スタイリングの際は、ワックスを
軽くつけて、ボリュームを出しているそう。スタイリングのポイントは前髪を分ける位置。頭の形がよく見えるように気をつけているのと、少し軽さを出すために、何色かを混ぜ
合わせたオリジナルカラーでカラーリングしています。<BR>

<?php p('p4.jpg', 'c', 'カジュアルな服にも、もちろん似合います'); ?>

　いしらさん曰く「この髪型は、比較的誰にでも似合うし、アレンジが利いてすごく便利。女性らしいワンピースでも、かちっとしたパンツスーツでもそれなりに決まる。でも、
人それぞれ似合う髪形は違うと思うので、自分の顔の形をよく見極めて、似合う髪形を見つけることが大切だと思います」とのこと。<BR>

<?php p('p5.jpg', 'c', '分け目を変えると雰囲気もだいぶ変わりますよ。シャオメイお気に入りの一枚どす'); ?>
<?php p('p6.jpg', 'c', '耳の下からカールさせるだけで、和装にもばっちり'); ?>

　言葉にして説明するのはちょっと難しいのですが、参考になれば幸いです。いつもより写真も大き目にしてみました。ショートでも和装って似合うんですね。ショートでも、ア
レンジ次第でいろんな雰囲気が出せるのだなぁと、少し驚いたシャオメイがお伝えしました！<br>

<?php p('p7.jpg', 'c', 'テレビ東京のスタジオで、東郷じゃなかった東さんと遭遇。「九龍」ファンにはうれしいツーショットなのでは？'); ?>


<br>
追伸：現在、いしらさんはテレビ東京系で放送される『血脈』の撮
影に入っています（放送日未定）。放送日が近づきましたら、またニュースでご紹介しますので、お楽しみに！

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
