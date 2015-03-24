$(document).ready(function(){

	$(".menu-toggle").on('click', function(){
		$('.navbar').slideToggle({duration:1000});
	});
	$(".content img").on('click', function(){
		$('.navbar').slideToggle({duration:1000});
	});

	$(".sommaire li").on('click', function(){
		$(".sommaire li.Expositions>a").removeAttr('href');
		$(this).children('ul').slideToggle({duration:1000});
	});

});
