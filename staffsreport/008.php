<?php 
include_once('./_include/common.php');
$__cN = 8;
$__cT = 'お腹いっぱ～い！『BISTRO SMAP』でいしらさん大満足';
$__cD = 'November 12th, 2002';
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
<?php p('p1.jpg', 'c', 'これが楽屋の前に張ってあるのだ'); ?>

　みなさん、こんにちは。シャオメイでございます。11月も半ば、雑誌などでは早くもクリスマス特集を見かけるようになりましたね。ちょっと早過ぎじゃない？って毎年思う
わたくし。みなさんはどう思います？<br>

<?php p('p2.jpg', 'c', '大公開！ケンタさんのメイク用具'); ?>
<?php p('p3.jpg', 'c', '準備中'); ?>
<?php p('p4.jpg', 'c', '髪のセット中。なんかお茶目ないしらさん'); ?>

　さてさて。最近のいしらさん、ほんとにお忙しそうです。澄子がますます存在感を増しているドラマ『薔薇の十字架』の撮影も佳境に突入しつつあるようですし、その合間に単
発のお仕事やら執筆活動（『お茶っコ日和』）やらもあるのです。<BR>

<?php p('p5.jpg', 'c', '楽しそう'); ?>
<?php p('p6.jpg', 'c', 'これ、鏡を通して撮ってるの'); ?>

　そんななか、先日、『SMAP×SMAP』の『BISTRO SMAP』の収録がありました。『薔薇の十字架』で共演中の中尾ミエさんもご一緒です。おふたりがオーダー
したのは“野菜料理withダイコン”。おふたりとも野菜が大好きで、特にダイコンが大好きという中尾さんのリクエストにスマップのメンバーが応えてくれました。<BR>

<?php p('p7.jpg', 'c', '収録前に打ち合わせ'); ?>
<?php p('p8.jpg', 'c', '準備万端。この日の衣装は『FOXEY』のニットワンピース'); ?>

　この日のオーナーは稲垣さん。いしらさんとは何年か前に恋人役で共演したことがあるそうで、「なつかしいですねぇ」と盛り上がる一幕も。トークでは、『薔薇の十字架』の
撮影裏話や、中尾さんといしらさんのデビュー秘話なども飛び出しましたよ。<BR>

<?php p('p9.jpg', 'c', 'この日のお弁当・つくね丼。食べているのはわたくし、シャオメイ。'); ?>
<?php p('p10.jpg', 'c', '休憩中、ポラロイドに書き込み'); ?>

　4人から料理が出てくるにもかかわらず、「おいし〜」と最初からいっぱい食べてしまったいしらさん、終わったあとは少し苦しそうでした。笑。でもあんなにおいしそうなお
料理出されたら、お腹いっぱいでも食べちゃうよなぁ。満足そうないしらさんを見て、そう思ったシャオメイでした。どんなお料理が出てきたかは、オンエアを見てね。意外（？
）な方が、勝利を収めましたよ。いしらさんの食べっぷり（？）もお見逃しなく！ 
オンエアの日時は、HPのメディア・インフォを確認してくださいね。以上、シャオメイがお伝えしました。

<?php p('p11.jpg', 'c', '収録後。“お腹いっぱ～い！”'); ?>

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
