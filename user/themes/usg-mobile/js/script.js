$(document).ready(function(){

	var winHeight = $(window).height();
	var winWidth = $(window).width();

	$(".wrapper-text").css("height", winHeight);
	$(".expo-content").css("height", winHeight);



	//menu
	$(".menu-toggle").on('click', function(){
		if($('.navbar').hasClass("open")){
			$('.navbar').removeClass("open");
		}
		else{
			$('.navbar').addClass("open");
		}
	});

	$(".content img").on('click', function(){
		if($('.navbar').hasClass("open")){
			$('.navbar').removeClass("open");
		}
		else{
			$('.navbar').addClass("open");
		}
	});

	$(".sommaire li.expositions .title-sub").remove();

	$(".sommaire li").on('click', function(){
		if($(this).children('ul').length > 0){
			$(this).children('a').removeAttr('href');
		}
		$submenu = $(this).children('ul');
		if($submenu.hasClass("open")){
			$(".sommaire li .submenu").removeClass("open");
			$submenu.removeClass("open");
		}
		else{
			$(".sommaire li .submenu").removeClass("open");
			$submenu.addClass("open");
			//css remove padding above expo .open
			//$('.navbar .sommaire li.expositions').css("padding", "17px 0px 0px 0px");
		}
	});

	$(".conférences").on("click", function(){
		$(".jeanpierregrunfeld a").attr('href','/conference/jeanpierre');
	});


	//Pages exposants
	$(".colonne-left").css("height", winHeight);
	$(".colonne-central").css("height", winHeight);
	$(".colonne-right").css("height", winHeight);

	//Animation des images dans les fiches expo / conférence
	var $dialogRight = $('.colonne-right');
	$dialogRight.on('click swipeleft swiperight', animateRight);

	function animateRight(){ 
		var leftMove = $(".colonne-central").outerWidth();
		$colonneRight = $(this);
		if($colonneRight.hasClass('active')){
			$colonneRight.removeClass('active');
			$colonneRight.animate({
				left: 0
			});
		}
		else{
			$colonneRight.addClass('active');
			$colonneRight.animate({
				left: -leftMove
			});
		}
	}

	//remove fanette mellier from expo
	$(".laurelimongietfanettemellier").remove();



});
