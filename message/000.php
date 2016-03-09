<?php 
include_once('./_include/common.php');
$__cN = XX;
$__cT = '';
$__cD = 'XX';
?>

<?php p('p1.jpg', 'XXX', 'XXX'); ?>
<?php p('p2.jpg', 'XXX', 'XXX'); ?>
<?php p('p3.jpg', 'XXX', 'XXX'); ?>
<?php p('p4.jpg', 'XXX', 'XXX'); ?>
<?php p('p5.jpg', 'XXX', 'XXX'); ?>
<?php p('p6.jpg', 'XXX', 'XXX'); ?>
<?php p('p7.jpg', 'XXX', 'XXX'); ?>
<?php p('p8.jpg', 'XXX', 'XXX'); ?>
<?php p('p9.jpg', 'XXX', 'XXX'); ?>
<?php p('p10.jpg', 'XXX', 'XXX'); ?>
<?php p('p11.jpg', 'XXX', 'XXX'); ?>
<?php p('p12.jpg', 'XXX', 'XXX'); ?>
<?php p('p13.jpg', 'XXX', 'XXX'); ?>
<?php p('p14.jpg', 'XXX', 'XXX'); ?>
<?php p('p15.jpg', 'XXX', 'XXX'); ?>

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
    <div id="mainArea" class="typeB typeW typeNews alp0">
      <div class="main">
      <div class="mainHeader">
        <h3>#<?php echo $__cN; ?></h3>
        <h2><?php echo $__cD; ?></h2>
        <?php if($__cT != ''){ ?><h1><?php echo $__cT; ?></h1><?php } ?>
      </div><!-- /mainHeader -->
      <div class="mainBody clearfix">

<p>
XXX
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
