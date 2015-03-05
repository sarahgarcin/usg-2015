$(document).ready(function(){

	// Panzoom
	$(".panzoom")
	  .panzoom({
	    minScale: 1,
	  })
	  .panzoom("pan", -3500, -1038);

	//ANCRE
	$('.submenu .SarahBoris a').click(function(){
		$(".panzoom").panzoom("pan", 1700, -200, {
              relative: true,
              animate: true
          });
	});
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
	var $dialog = $("#dialog");
	$('.img-expo div a').on('click', function(){
		$dialog.dialog({
	    	autoOpen: false,
	    	appendTo: ".panzoom",
	    	position: { my: "left top", at: "left top", of: $(this) },
	    	modal: true,
	    	height: $(window).height() - 100,
	    	width: $(window).width() - 400        
	 	});
	 	$link = $(this).attr('href');
	 	$dialog.load($link + " .container");
		$dialog.dialog('open');
		return false;

	});
	// $('body').bind('click', function(e) {
 //  	if($dialog.dialog('isOpen') && !$(e.target).is('.ui-dialog, a') && !$(e.target).closest('.ui-dialog').length) {
 //      	$dialog.dialog('close');
 //  	}
	// });

	//Drag effect 

// bind mouse + click event
	// var clicking = false;
	// $('.panzoom').mousedown(function(){
	//     clicking = true;
	// });
	// $('.panzoom').mouseup(function() {
	//   i = 0;
	// });
	// $(document).mouseup(function(){
	//     clicking = false;
	// });
	// var i = 0;
	// var xPrev = 0;
	// var yPrev = 0;
	// $('.panzoom').mousemove(function(e){
	//     if(clicking === false) return;
	//     // Mouse click + moving logic here
	//     console.log('moving + clicking!!');
	//   i++;
	// });

// FOLLOW THE MOUSE
	// var mouseX = 0, mouseY = 0;
	// $('.panzoom').mousemove(function(e){
	//    mouseX = e.pageX;
	//    mouseY = e.pageY; 
	// });

	// // cache the selector
	// var follower = $(".img-expo div");
	// var xp = 0, yp = 0;
	// var loop = setInterval(function(){
	//     // change 12 to alter damping higher is slower
	//     xp += (mouseX - xp) - 500;
	//     yp += (mouseY - yp) - 500;
	//     console.log(xp);
	//     follower.css({"margin-left":xp, "margin-top":yp});
	    
	// }, 30);

// Animate images suivant le mouvement de la souris
	// var xPrev = 0;
	// var yPrev = 0;
	// $('.panzoom').mousedown(function(e){
 //    if(xPrev<e.pageX && yPrev<e.pageY) { 
 // 			console.log('right top');
 // 			$('.img-expo div').animate({'margin-left':'90px', 'margin-top':'90px'},500).animate({'margin-left':'0px', 'margin-top':'0px'},100);
 // 		}
	// 	if(xPrev>e.pageX && yPrev<e.pageY) { 
 // 			console.log('left top');
 // 			$('.img-expo div').animate({'margin-left':'-90px', 'margin-top':'90px'},500).animate({'margin-left':'0px', 'margin-top':'0px'},100);
	// 	}
	// 	if(xPrev>e.pageX && yPrev>e.pageY) { 
 // 			console.log('left bottom');
 // 			$('.img-expo div').animate({'margin-left':'-90px', 'margin-top':'-90px'},500).animate({'margin-left':'0px', 'margin-top':'0px'},100);
	// 	}
	// 	if(xPrev<e.pageX && yPrev>e.pageY) { 
 // 			console.log('right bottom');
 // 			$('.img-expo div').animate({'margin-left':'90px', 'margin-top':'-90px'},500).animate({'margin-left':'0px', 'margin-top':'0px'},100);
	// 	}
	// 	xPrev=e.pageX;
	// 	yPrev=e.pageY;
	// });

});
