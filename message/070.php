<?php 
include_once('./_include/common.php');
$__cN = 70;
$__cT = '';
$__cD = 'January 1st, 2015';
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

<p> 2015 明けましておめでとうございます。</p>

<p>健やかで、清々しい日々でありますように。 <br />
笑顔がたくさんありますように。<br />
今年もよろしくお願いいたします。</p>

<p>2015年元旦 石田ゆり子<br />
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
