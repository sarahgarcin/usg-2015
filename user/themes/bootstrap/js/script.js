jQuery(document).ready(function($) {

	// Panzoom
	$(".panzoom")
	  .panzoom({
	    minScale: 1,
	  })
	  .panzoom("pan", -2836, -1500);

	// $(".zoom-plus").on("click", function(e){
	//  e.preventDefault(); $(".panzoom").panzoom("zoomIn"); 
	// });
	// $(".zoom-moins").on("click", function(e){
	//  e.preventDefault(); $(".panzoom").panzoom("zoomOut"); 
	// });

	//ANCRE
	// $('.submenu li a').click(function() {
	// 	var element = $(this).attr('data-title');
	// 	console.log("Left: " + $(element).offset().left + " Top: " + $(element).offset().top);
	// 	//$(".panzoom").panzoom("pan", -1300, -1700);
	// 	var top = $(element).offset().top * 5.8;
	// 	var left = $(element).offset().left - 200;
	// 	console.log(top);
	// 	console.log(left);
	// 	$(".panzoom").panzoom("pan", left, - top);
 //    	//$('html').scrollTo( {top:$(element).offset().top + "px", left:$(element).offset().left + "px"}, 800);
 //   	});

	//POP UP
	// $('.img-expo div a').each(function() {
	// 	var $link = $(this);
	// 	var $dialog = $('<div></div>')
	// 		.load($link.attr('href'))
	// 		.dialog({
	// 			autoOpen: false,
	// 			closeText: "x",
	// 			position: { my: "left top", at: "left top", of: $link },
	// 			width: 600
	// 		});

	// 	$link.click(function() {
	// 		$dialog.dialog('open');

	// 		return false;
	// 	});

	// 	$('body').bind('click', function(e) {
 //        	if($dialog.dialog('isOpen') && !$(e.target).is('.ui-dialog, a') && !$(e.target).closest('.ui-dialog').length) {
 //            	$dialog.dialog('close');
 //        	}
 //        });
 //    });
});
