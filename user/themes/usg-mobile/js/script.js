$(document).ready(function(){

	$(".menu-toggle").on('click', function(){
		$('.navbar').slideToggle({duration:1000});
	});
	$(".content").on('click', function(){
		$('.navbar').slideToggle({duration:1000});
	});


});
