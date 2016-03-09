$(function(){
	setMainTop();
	$(window).bind('resize',function(){
		setMainTop();
	});
	$('#mv_ani').bind('load',function(){
		setMainTop();
	});

	if(window.location.hash == '#_bn'){
		$('#mv_h1,#mv_p,#mainArea,#respNavBlock,#respNavBlock_normal,#btn_resp_pagetop').css({'opacity':1});
		$('#navBlock').queue([]).css({'bottom':'-25px'}).css({'opacity':1, 'bottom':'-15px'});
		window.location.hash = '';
	}
	else {
		$('#mv_h1').queue([]).fadeTo(1000,1);
		$('#mv_p').queue([]).delay(700).fadeTo(3000,1);
		$('#mainArea').queue([]).delay(1300).fadeTo(1500,1);
		$('#navBlock').queue([]).css({'bottom':'-25px'}).delay(2000).animate({'opacity':1, 'bottom':'-15px'},1500);
		$('#respNavBlock,#respNavBlock_normal,#btn_resp_pagetop').queue([]).delay(2000).animate({'opacity':1},1500);
	}


	$('.phBlock .ph img').load(function(){
		setPhPos();
	});
	$(window).bind('resize',function(){
		setPhPos();
	});
});
