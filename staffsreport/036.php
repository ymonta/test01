<?php 
include_once('./_include/common.php');
$__cN = 36;
$__cT = 'いしらさんが京都の名庭園をご案内！';
$__cD = 'June 30th, 2004';
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

<?php p('p1.jpg', 'c', '広い庭園を見渡しながら移動中'); ?>
<?php p('p2.jpg', 'c', '目線いただきました！'); ?>

　みなさん、こんにちは。シャオメイでございます。なぜか中休みばかりの今年の梅雨。暑い日が続きますが、お元気ですか？<br>

　今回のニュースは、今週の金曜日にNHKハイビジョンで放送される『ふるさと発　京都知られざる光の庭 “庭師100年・小川治兵衛の近代”』についてお伝えします。こ
このところは『北の零年』の撮影に全力投球のいしらさんですが、その撮影の合い間、4月の末頃、まさに新緑の季節にこの番組の撮影は行われました。<BR>

<?php p('p3.jpg', 'c', 'ひとりで休んでいる…わけではありません。撮影中です'); ?>
<?php p('p4.jpg', 'c', 'ふと空を見上げると、飛行機雲が！'); ?>
<?php p('p5.jpg', 'c', 'そして足元には、青々とした苔がびっしり'); ?>

　いしらさんが訪れたのは、京都・東山の南禅寺界隈。この地には、いくつもの大邸宅が並んでいます。近代日本の財政界で名を成した大立者たちが、惜しみなく財を注いで作り
上げた、極上の空間。とりわけ、敷地何百、何千坪に設えられた庭園は、四季折々に変化をみせる、まさに“生きた芸術”とも言えるほど。ただ、この庭園は、一般の人が自由に
入ることはできません。今回、特別にカメラが入り、そしていしらさんがこれらの庭園を案内することになりました。<BR>

　『植治の庭』と称されるこれらの庭は、近代日本の天才作庭家、植治七代目・小川治兵衛氏の手によるもの。木々の奥にさりげなく置かれた国宝級の石塔。まるで深山の中にい
るような小川のせせらぎ。それはまさに“生きた芸術”でした。また同氏は、この他にも、平安神宮や京都御苑なども手がけられているそうです。<BR>

<?php p('p6.jpg', 'c', '新緑の中を移動。いしらさんも気持ちよさそう！'); ?>
<?php p('p7.jpg', 'c', '本番中のところを後ろからパチリ'); ?>
<?php p('p8.jpg', 'c', 'こちらも本番中。隣にいらっしゃるのが植治十一代目・小川治兵衛氏'); ?>

　植治という屋号は世襲制で、現在は、植治十一代目・小川治兵衛氏がこれらの庭を守っています。小川さんから庭園についていろいろなお話を伺ったいしらさんは、「これまで
庭というものにあまり興味がなかったのですが、話を聞いてみると、すごく深くておもしろく、興味を持ちました。まさに職人の世界で、すごく憧れます」と感想を。夏の夜、い
しらさんと一緒に、歴史ある名庭園を堪能してみませんか？　以上、シャオメイがお伝えしました。※現在のところ、地上波での放送予定はないそうです。観られない方、ごめん
なさい！

<?php p('p9.jpg', 'c', 'おなじみの関さんと'); ?>
<?php p('p10.jpg', 'c', '庭師の方と！ではありません。ヘアメイクの北さんと'); ?>

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
