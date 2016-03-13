var __bgmTgt = '';
var __seTgt = '';
var __scrollTgt = 'html,body';
var __scrollTgtWebkit = 'body';
var __scrollTgtMoz = 'html';


$(function(){
	var scrolly = 0;
	var speed = 200;
	$('html').mousewheel(function(event, mov) {
		if(jQuery.browser.webkit){
			if (mov > 0) {
				scrolly =  $(__scrollTgtWebkit).scrollTop() - speed;
			}
			else if (mov < 0) {
				scrolly =  $(__scrollTgtWebkit).scrollTop() + speed;
			}
		} else {
			if (mov > 0) {
				scrolly =  $(__scrollTgtMoz).scrollTop() - speed;
			}
			else if (mov < 0) {
				crolly =  $(__scrollTgtMoz).scrollTop() + speed;
			}
		}
		$(__scrollTgt)
			.stop()
			.animate({scrollTop: scrolly}, 'slow', $.easie(0,0,0,1));
			//イージングプラグイン使わない場合
			//.animate({ scrollTop: scrolly }, 'normal');
		return false;
	});

	
	if ($('#navBlockIn').size()) {
		$('#navBlockIn a').hover(
			function(){
				$(this).children('span').queue([]).animate({'margin-top':'-20px'},'normal','easeOutElastic');
			},
			function(){
				$(this).children('span').queue([]).animate({'margin-top':0},'normal','easeOutBounce');
			}
		);
	}
});

function setDoorPos(){
	var wH = $(window).height();
	var mH = $('#mainArea').height();
	var mT = Number(wH - mH)/2;
	if(mH<wH){
	}
	else {
		mT = 30;
	}
	$('#mainArea').css({'margin-top': mT + 'px'});
}

function nextStage(){
		$('#mainArea').fadeOut(1000, function(){
			window.location.href = '/information/';
			setTimeout(setDefault, 1500);
		});
}

function setDefault(){
	$('#mainArea').fadeIn();
	$('#d_0 img').attr({'src':'/images/door_start_01.png'});
}


function menuOpen(){
	$('#respNavBlock').queue([]).fadeIn();
	$('#respNavBlock_normal').queue([]).fadeOut();
}


function menuClose(){
	$('#respNavBlock').queue([]).fadeOut();
	$('#respNavBlock_normal').queue([]).fadeIn();

}

function setMainTop(){
	var t =$('#header2').height() + 30; 
	$('#mainArea').css({'top': t + 'px'});
}

function pageTop(){
	$("html,body").queue([]).animate({scrollTop:0},'normal',"easeOutElastic");
}

function jumpTo(tgt){
	var sT = Number($(tgt).position().top + $('#mainArea').position().top - 70);
	$('#linkList').css({
			"filter" : "blur(3px)",
			"-moz-filter" : "blur(3px)",
			"-webkit-filter" : "blur(3px)"
		});
	setTimeout(function(){
		$('#linkList').css({
			"filter" : "none",
			"-moz-filter" : "none",
			"-webkit-filter" : "none"
		});
	},300);

	$("html,body").queue([]).animate({scrollTop:sT},'slow',"easeOutElastic",function(){
	});
}

function setPhPos(){
	var wW = $(window).width();
	var bW = 1000;

	var mW = 500;
	if(bW > wW){
		bW = wW; 
	}

	if(wW >640){
		
		$('.phBlock.typeL').each(function(){
			var pW = $(this).children('.ph').children('img').width();
			$(this).children('em').width(pW);
			
			var m = Number((bW-mW)/2 - 20) * -1;
			$(this).css({'margin-left': m + 'px'});
			
		});
	
		$('.phBlock.typeR').each(function(){
			var pW = $(this).children('.ph').children('img').width();
			$(this).children('em').width(pW);
			var m = Number((bW-mW)/2 - 20) * -1;
			$(this).css({'margin-right': m + 'px'});
		});
	
		$('.phBlock.typeC').each(function(){
			var pW = $(this).children('.ph').children('img').width();
			$(this).children('em').width(pW);
			var m = Number((mW-pW)/2);
			$(this).css({'margin-left': m + 'px'});
		});
	}
	else {

		$('.phBlock.typeL').css({'margin-left': '0'});
		$('.phBlock.typeR').css({'margin-right': '0'});
		$('.phBlock.typeC').css({'margin-left': '0'});
		$('.phBlock em').css({'width':'100%'});

	}
}

function setPhPos2(){
	var wW = $(window).width();
	var bW = 1000;

	var mW = 700;
	if(bW > wW){
		bW = wW; 
	}

	if(wW >640){
		
		$('.phBlock.typeL').each(function(){
			var pW = $(this).children('.ph').children('img').width();
			$(this).children('em').width(pW);
			
			var m = Number((bW-mW)/2 - 20) * -1;
			$(this).css({'margin-left': m + 'px'});
			
		});
	
		$('.phBlock.typeR').each(function(){
			var pW = $(this).children('.ph').children('img').width();
			$(this).children('em').width(pW);
			var m = Number((bW-mW)/2 - 20) * -1;
			$(this).css({'margin-right': m + 'px'});
		});
		
		$('.phBlock.typeC').each(function(){
			var pW = $(this).children('.ph').children('img').width();
			$(this).children('em').width(pW);
			//var m = Number((mW-pW)/2);
			//$(this).css({'margin-left': m + 'px'});
		});
		
	}
	else {

		$('.phBlock.typeL').css({'margin-left': '0'});
		$('.phBlock.typeR').css({'margin-right': '0'});
		$('.phBlock.typeC').css({'margin-left': '0'});
		$('.phBlock em').css({'width':'100%'});

	}
}


function backnumberOpen(tgt){
	if($(window).width() > 640){
		$('#backnumberWindow').fadeIn('fast',function(){
			//alert(Number($('#_p'+tgt).position().top - 40));
			$(this).scrollTop(Number($('#_p'+tgt).position().top - 200));
			$('body').css({'overflow':'hidden'});
			__scrollTgt = '#backnumberWindow';
			__scrollTgtWebkit = '#backnumberWindow';
			__scrollTgtMoz = '#backnumberWindow';
		});
	}
	else {
		$('#backnumberSelect').focus();
	}
}


function backnumberClose(){
	$('#backnumberWindow').hide();
	__scrollTgt = 'html,body';
	__scrollTgtWebkit = 'body';
	__scrollTgtMoz = 'html';
	$('body').css({'overflow':'auto'});
}

function jumpBackNumber(tgt){
	window.location.href = $(tgt).val() + '#_bn';
}

