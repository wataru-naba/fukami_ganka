

//pagetop
var pagetop = $('.pagetop');
$(window).scroll(function(){
	if($(this).scrollTop() > 150){
		pagetop.fadeIn(400);
	}else{
		pagetop.fadeOut(400);
		setTimeout(function(){
			pagetop.removeClass('active');
		},400);
	}
});
pagetop.click(function(){
	pagetop.addClass('active');
	$('body,html').animate({
		scrollTop: 0
	}, 800 ,'easeInOutCirc');
	return false;
});

//Insert
$('.nav_list a').prepend('<i class="icon-right-open-big"></i>');

//メイン画像
$(window).on('load',function(){
$('.slider').slick({
	fade:true,
	autoplay:true,
	arrows:true,
	autoplaySpeed:6000,
	speed:1500,
	pauseOnFocus:false,
	pauseOnHover:false,
	pauseOnDotsHover:false,
	prevArrow:'.top-prev',
	nextArrow:'.top-next',
	swipe:true,
	cssEase:'ease-out',
	useCSS:true,
	dots:false,
	centerPadding:0
});

$('.mi1').removeClass('slick-current').addClass('my');
setTimeout(function(){
	$('.mi1.my').addClass('slick-current').removeClass('my');
},100);

$('.main').addClass('on');
});

$(document).on('touchend click','.nav-button-wrap',function(event){
	eventHandler(event,$(this));
	$('.nav_wrap').slideToggle(300);
	$('.main_nav').toggleClass('active');
	$('.nav-button').toggleClass('active');
	$(this).toggleClass('active');
});

if($('.block_yoyaku').length){
$('.b_yoyaku_start').matchHeight();
}



function eventHandler(event,selector){
	event.stopPropagation();
	event.preventDefault();
	if(event.type === 'touchend')selector.off('click');
}



//商品スクロール
$('.pn_box').on('click',function(){
	var i = $('.pn_box').index(this);
	var p = $('.t_product').eq(i).offset().top;
	var space = 0;
	if (window.innerWidth <= 768){
		space = 20;
	}else{
		space = 10;
	}
	$('html,body').stop().animate({ scrollTop: p - space}, 1000, 'easeOutCubic');
	return false;
});

//ヘッダー固定
$('.nav .nav_list').clone().appendTo('.sub_nav');
$(window).on('load scroll touchmove resize',function(){
	var w = $(window).innerWidth();
	var elm = $('.sub_header');
	var elm_pos = $('.fix_pos');
	if(elm_pos.length && w > 767){
		var fix_pos = elm_pos.offset().top;
		if($(this).scrollTop() > fix_pos){
			elm.addClass('on');
		}else{
			elm.removeClass('on');
		}
	}
});
