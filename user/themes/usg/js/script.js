$(document).ready(function(){
	
	//  _ _                    
	// | | |_   _ ()_ || ||_ _ 
	// | V /o\ /_||/o\|o\|/o(c'
	//  \_/\_,]L| L\_,]_/L\(\_)
	                        
	var $dialog = $("#dialog");

	//          _          _            _              _           _          _          _            _             _        
	//         /\ \       /\ \         /\ \     _    /\ \         /\ \       /\ \       /\ \         /\ \     _    / /\      
	//        /  \ \     /  \ \       /  \ \   /\_\ /  \ \        \_\ \      \ \ \     /  \ \       /  \ \   /\_\ / /  \     
	//       / /\ \ \   / /\ \ \     / /\ \ \_/ / // /\ \ \       /\__ \     /\ \_\   / /\ \ \     / /\ \ \_/ / // / /\ \__  
	//      / / /\ \_\ / / /\ \ \   / / /\ \___/ // / /\ \ \     / /_ \ \   / /\/_/  / / /\ \ \   / / /\ \___/ // / /\ \___\ 
	//     / /_/_ \/_// / /  \ \_\ / / /  \/____// / /  \ \_\   / / /\ \ \ / / /    / / /  \ \_\ / / /  \/____/ \ \ \ \/___/ 
	//    / /____/\  / / /   / / // / /    / / // / /    \/_/  / / /  \/_// / /    / / /   / / // / /    / / /   \ \ \       
	//   / /\____\/ / / /   / / // / /    / / // / /          / / /      / / /    / / /   / / // / /    / / /_    \ \ \      
	//  / / /      / / /___/ / // / /    / / // / /________  / / /   ___/ / /__  / / /___/ / // / /    / / //_/\__/ / /      
	// / / /      / / /____\/ // / /    / / // / /_________\/_/ /   /\__\/_/___\/ / /____\/ // / /    / / / \ \/___/ /       
	// \/_/       \/_________/ \/_/     \/_/ \/____________/\_\/    \/_________/\/_________/ \/_/     \/_/   \_____\/        
	                                                                                                                      
	function OpenPopup($link, $this, $width) {
	$dialog.dialog({
    	autoOpen: false,
    	appendTo: ".panzoom",
    	position: { my: "right-150 center-50", at: "right-150 center-50", of: window },
    	modal: true,
    	height: $(window).height() - 100,
    	width: $(window).width() - $width,       
 	});
 	$dialog.load($link + " .container");
	$dialog.dialog('open');
	}

	$(window).load(function(){
		var navWidth = $('.navbar').width() - 30;
		$('.submenu').css('left', navWidth);
	});
	

	//  ___    __    _     ____  ___   ___   _     
	// | |_)  / /\  | |\ |  / / / / \ / / \ | |\/| 
	// |_|   /_/--\ |_| \| /_/_ \_\_/ \_\_/ |_|  | 

	// $(".panzoom")
	//   .panzoom({
	//     minScale: 1,
	//   })
	//   .panzoom("pan", -3500, -1038, { 
	//   	relative: true,
	//    });
	$('.panzoom').pep(); 

	//   __  _ _  ___ ___  ___ 
	//  /_`) )\`) ))  ))_) )L  
	// (( ( ((`( ((__((`\ ((_  
                        
	$('.submenu li a').click(function() {
		var element = $(this).attr('data-title');
		var $elementObj = $("#" + element);
		if($elementObj.length){
			var relativeY = $(".panzoom").offset().top - $elementObj.offset().top;
			var relativeX = $(".panzoom").offset().left - $elementObj.offset().left;
			var top = relativeY + $elementObj.height() /2 ;
			var left = relativeX + $elementObj.width() /2 ;
			$(".panzoom").animate({ 
				top: top, 
				left: left 
			});

			//OPEN POP UP
			$link = $("#" + element + " a").attr('href');
			setTimeout(
			  function() 
			  {
			    OpenPopup($link, $elementObj, 800);
					return false;
			  }, 800);
		}

  });
//FIN ANCRE

	// .-------.     ,-----.    .-------.           ___    _ .-------.  
	// \  _(`)_ \  .'  .-,  '.  \  _(`)_ \        .'   |  | |\  _(`)_ \ 
	// | (_ o._)| / ,-.|  \ _ \ | (_ o._)|        |   .'  | || (_ o._)| 
	// |  (_,_) /;  \  '_ /  | :|  (_,_) /        .'  '_  | ||  (_,_) / 
	// |   '-.-' |  _`,/ \ _/  ||   '-.-'         '   ( \.-.||   '-.-'  
	// |   |     : (  '\_/ \   ;|   |             ' (`. _` /||   |      
	// |   |      \ `"/  \  ) / |   |             | (_ (_) _)|   |      
	// /   )       '. \_/``".'  /   )              \ /  . \ //   )      
	// `---'         '-----'    `---'               ``-'`-'' `---'      
	                                                                 
	//OPEN POP UP on click on image 
	$('.img-expo div a').on('click', function(){
			OpenPopup($(this).attr('href'), $(this), 800);
			return false;
	});

	//OPEN POP UP on click on menu
	$('.navbar-collapse .nav li a').on('click', function(){
		OpenPopup($(this).attr('href'), $(this), 800);
		return false;
	});
	
	//Close Pop when click outside
		$('.panzoom').mouseup(function (e){
    if (!$dialog.is(e.target) && $dialog.has(e.target).length === 0){
        $dialog.dialog("close");
    }
	});

	//Animation on image in dialog window
	var $dialogLeft = $('.colonne-left');
	var $dialogRight = $('.colonne-right');

	$dialog.on('click', $dialogLeft, function(){
		$colonneLeft = $(this).children().children().children('.colonne-left');
		if($colonneLeft.hasClass('active')){
			$colonneLeft.removeClass('active');
			$colonneLeft.animate({
				left: 0
			});
		}
		else{
			$colonneLeft.addClass('active');
			$colonneLeft.animate({
				left: 250
			});
		}
	});
	$dialog.on('click', $dialogRight, function(){
		$colonneRight = $(this).children().children().children('.colonne-right');
		if($colonneRight.hasClass('active')){
			$colonneRight.removeClass('active');
			$colonneRight.animate({
				left: 0
			});
		}
		else{
			$colonneRight.addClass('active');
			$colonneRight.animate({
				left: -250
			});
		}
	});



	// ___ ____ ____ ____ _    ____    _  _ ____ _  _ _  _    
	//  |  |  | |  | | __ |    |___    |\/| |___ |\ | |  |    
	//  |  |__| |__| |__] |___ |___    |  | |___ | \| |__|   

	var $ToogleMenu = $(".menu-toggle");
	var $ElementClass = $(".navbar-collapse").attr("class");
	var $ElementToggle = $(".navbar-collapse");

	$ElementToggle.addClass('active');

	 $ToogleMenu.click(function(){
	 	$ElementToggle.slideToggle({
	 		duration: 700,
	 	});
	});

	                                                       

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
