$(document).ready(function(){
	
	//  _ _                    
	// | | |_   _ ()_ || ||_ _ 
	// | V /o\ /_||/o\|o\|/o(c'
	//  \_/\_,]L| L\_,]_/L\(\_)
	                        
	var $dialog = $("#dialog");
	var $popHeight = $(window).height() / 1.2;

	// $(".panzoom").on('mousedown', function(){
	// 	$(this).css('cursor', 'url("/user/themes/usg/images/cursorclick.png"), pointer')
	// });
	// $(".panzoom").on('mouseup', function(){
	// 	$(this).css('cursor', 'url("/user/themes/usg/images/cursordrag.png"), pointer')
	// });


	// .-. .-. . . .-. .-. .-. .-. . . .-. 
	// |-  | | |\| |    |   |  | | |\| `-. 
	// '   `-' ' ` `-'  '  `-' `-' ' ` `-'                                                                                                                      
	function OpenPopup($link, $this, e) {
		$dialog.dialog({
    	autoOpen: false,
    	appendTo: ".panzoom",
    	position: { my: "right-150 center-20", at: "right-150 center-20", of: window },
    	modal: true,
    	height: $popHeight,
    	width: $(window).width() / 1.7,    
	 	});
	 	$dialog.load($link + " .container", function(){
		 	$('.panzoom .ui-dialog').css("height", $popHeight);
			$('.panzoom .ui-dialog .row').css("height", $popHeight);
			$('.panzoom .ui-dialog .colonne-left').css("height", $popHeight);
			$('.panzoom .ui-dialog .colonne-central').css("height", $popHeight);
			$('.panzoom .ui-dialog .colonne-right').css("height", $popHeight);
			$('.panzoom .ui-dialog .static-text').css("height", $popHeight);

			$('.colonne-left').hover(animateLeft);
			$('.colonne-right').hover(animateRight);
	 	});
		$dialog.dialog('open');


		//Close Pop when click outside
		$('.panzoom').on('click tap', function (e){
    	if (!$dialog.is(e.target) && $dialog.has(e.target).length === 0){
        $dialog.dialog("close");
    	}
		});

	}
  

	$(window).load(function(){
		var navWidth = $('.navbar').width() - 30;
		$('.submenu').css('left', navWidth);
	});	                              
	                             
	//     ___      ___      ___    
	//   //   ) ) //___) ) //    ) ) 
	//  //___/ / //       //___/ /  
	// //       ((____   //         

	$('.panzoom').pep({
		useCSSTranslation: true, 
		hardwareAccelerate: true, 
		shouldEase: false
	});


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
			$('.navbar-collapse').slideToggle({
	 			duration: 100,
	 		});
			setTimeout(
			  function() 
			  {
			    OpenPopup($link, $elementObj);
					return false;
			  }, 1000);
		}
		else {
			$('.navbar-collapse').slideToggle({
	 			duration: 100,
	 		});
			$url = $(this).attr('href');
			OpenPopup($url);
			return false;
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
	var $imageExpo = $('.img-expo div a');
	$imageExpo.on('click touchstart', function(){
			OpenPopup($(this).attr('href'), $(this));
			return false;
	});

	//OPEN POP UP on click on menu
	$('.navbar-collapse .nav li a').on('click', function(e){
		if($(this).parent().children('ul').length == 0) {
			OpenPopup($(this).attr('href'), $(this));
			return false;
		}
		else {
			e.preventDefault();
		}
	});

	
	//Animation on image in dialog window
	var $dialogLeft = $('.colonne-left');
	var $dialogRight = $('.colonne-right');
	//$dialog.on('click',$dialogLeft, animateLeft);
	//$dialog.on('click',$dialogRight, animateRight);

	function animateLeft(event){
		var dialogWidth = $('.ui-dialog').width();
		var rowWidth = ((dialogWidth * 50) / 100) + dialogWidth;
		var colonneWidth = (rowWidth * 33) / 100; 
		var leftMove = colonneWidth / 2;
		$colonneLeft = $(this);
		if($colonneLeft.hasClass('active')){
			$colonneLeft.removeClass('active');
			$colonneLeft.animate({
				left: 0
			});
		}
		else{
			$colonneLeft.addClass('active');
			$colonneLeft.animate({
				left: leftMove
			});
		};
	}
	function animateRight(){
		var dialogWidth = $('.ui-dialog').width();
		var rowWidth = ((dialogWidth * 50) / 100) + dialogWidth;
		var colonneWidth = (rowWidth * 33) / 100; 
		var leftMove = colonneWidth / 2;
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

	$dialog.on("touchstart touchstop touchmove click", $('.colonne-central'), function(e){
		e.stopPropagation(); 
	}); 
	// ___ ____ ____ ____ _    ____    _  _ ____ _  _ _  _    
	//  |  |  | |  | | __ |    |___    |\/| |___ |\ | |  |    
	//  |  |__| |__| |__] |___ |___    |  | |___ | \| |__|   

	var $ToogleMenu = $(".menu-toggle");
	var $ToogleMobile = $(".menu-toggle-mobile");
	var $ElementClass = $(".navbar-collapse").attr("class");
	var $ElementToggle = $(".navbar-collapse");

	$ElementToggle.addClass('active');

	 $ToogleMenu.click(function(){
	 	$ElementToggle.slideToggle({
	 		duration: 700,
	 	});

	 	var widthMenu = $(".navbar").width();
	 	$('.submenu').css("left", widthMenu-30);
	});

	$ToogleMobile.click(function(){
	 	$ElementToggle.slideToggle({
	 		duration: 700,
	 	});
	});

	// .-. .-. .-. 
	// |   `-. `-. 
	// `-' `-' `-' 
	var h2Size = $(window).width() / 300 + "em";
	var h1Size = $(window).width() / 120 + "em";
	var h3Size = $(window).width() / 550 + "em";

	$('.title h2').css('font-size', h2Size);
	$('.title h1').css({
		'font-size': h1Size
	});
	$('.title h3').css('font-size', h3Size);

	jQuery.fn.center = function (){
    this.css("position","absolute");
    this.css("top", (($(window).height() / 2) + ($('.carte-route').height() / 4.2)) - (this.outerHeight() / 2));
    this.css("left", (($(window).width() / 2) + ($('.carte-route').width() / 1.9)) - (this.outerWidth() / 2));
    return this;
	}

	$('.title').center();
	$(window).resize(function(){
	  $('.title').center();
	  $('.title h2').css('font-size', h2Size);
		$('.title h1').css('font-size', h1Size);
		$('.title h3').css('font-size', h3Size);
	});

});