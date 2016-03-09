<?php 
include_once('./_include/common.php');
$__cN = 50;
$__cT = '';
$__cD = 'March 11th, 2011';
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
    <div id="mainArea" class="typeB typeW typeNews alp0">
      <div class="main">
      <div class="mainHeader">
        <h3>#<?php echo $__cN; ?></h3>
        <h2><?php echo $__cD; ?></h2>
        <?php if($__cT != ''){ ?><h1><?php echo $__cT; ?></h1><?php } ?>
      </div><!-- /mainHeader -->
      <div class="mainBody typeMessage typeCenter clearfix">

<p>みなさま。</p>

<p>地震の影響で、家路につくことさえできない方が<br />
たくさんいらっしゃると、テレビでひっきりなしに放送されています。<br />
震源地近くのみなさま・・心配です。</p>

<p>私の携帯もつながりません。</p>

<p>今まで生きてきて、経験したことのない怖さでした。<br />
ああいうとき、人はただ、立ちすくむことしかできないのですね。<br />
わたしは外にいたので、<br />
あわてて家に戻ると、いろんなのものが床に散乱していました。</p>

<p>本日の公演（11日の夜公演）も中止になりました。<br />
今日お越しになるはずだったみなさま・・申し訳ありません。<br />
でも確かに、安全を考えると・・・。</p>

<p>まだ余震もありますし、安心はできません。<br />
どうかみなさま、<br />
安全第一で、行動してください。</p>

<p>とりいそぎ、でした。</p>

<p class="txRight">石田ゆり子</p>

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
