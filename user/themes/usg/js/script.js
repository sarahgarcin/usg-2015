$(document).ready(function(){
	
	//  _ _                    
	// | | |_   _ ()_ || ||_ _ 
	// | V /o\ /_||/o\|o\|/o(c'
	//  \_/\_,]L| L\_,]_/L\(\_)
	                        
	var $dialog = $("#dialog");
	var $popHeight = $(window).height() / 1.2;
	$(".panzoom").css({"top" : "-1038px", "left" : "-3500px"});

	// .-. .-. . . .-. .-. .-. .-. . . .-. 
	// |-  | | |\| |    |   |  | | |\| `-. 
	// '   `-' ' ` `-'  '  `-' `-' ' ` `-'                                                                                                                      
	function OpenPopup($link) {
		$dialog.dialog({
    	autoOpen: false,
    	appendTo: ".container",
    	position: { my: "right-150 center-20", at: "right-150 center-20", of: window },
    	modal: true,
    	height: $popHeight,
    	width: $(window).width() / 1.7,  
	 	});
	 	$dialog.load($link + " .container", function(){
		 	$('.container .ui-dialog').css("height", $popHeight);
			$('.container .ui-dialog .row').css("height", $popHeight);
			$('.container .ui-dialog .colonne-left').css("height", $popHeight);
			$('.container .ui-dialog .colonne-central').css("height", $popHeight);
			$('.container .ui-dialog .colonne-right').css("height", $popHeight);
			$('.container .ui-dialog .static-text').css("height", $popHeight);

			$('.colonne-left').on('click', animateLeft);
			$('.colonne-right').on('click',animateRight);
	 	});
		$dialog.dialog('open');


		//Close Pop when click outside
		$('.panzoom').on('mousedown touchstart', function (e){
    	if (!$dialog.is(e.target) && $dialog.has(e.target).length === 0){
        $dialog.dialog("close");
    	}
		});
	}                              
	                             
	//     ___      ___      ___    
	//   //   ) ) //___) ) //    ) ) 
	//  //___/ / //       //___/ /  
	// //       ((____   //         

	$('.panzoom').pep({
		useCSSTranslation: true, 
		hardwareAccelerate: true, 
		shouldEase: false,
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
			$('.navbar-collapse.active').removeClass('active');
			setTimeout(function(){
			  OpenPopup($link);
				return false;
			}, 1000);
		}
		else {
			$('.navbar-collapse.active').addClass('active');
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
			OpenPopup($(this).attr('href'));
			return false;
	});

	//OPEN POP UP on click on menu
	$('.navbar-collapse .nav li a').on('click', function(e){
		if($(this).parent().children('ul').length == 0) {
			$('.navbar-collapse.active').removeClass('active');
			OpenPopup($(this).attr('href'));
			return false;
		}
		else {
			e.preventDefault();
		}
	});

	
	//Animation on image in dialog window
	var $dialogLeft = $('.colonne-left');
	var $dialogRight = $('.colonne-right');

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
	var $ElementClass = $(".navbar-collapse").attr("class");
	var $ElementToggle = $(".navbar-collapse");

	$ToogleMenu.on('click', function(){
		if($ElementToggle.hasClass("active")){
				$ElementToggle.removeClass('active');
		}
		else{
			$ElementToggle.addClass('active');
		}
	});

	//Position du submenu
	var widthMenu = $(".navbar").width();
	$('.submenu').css("left", widthMenu-30);

	$(window).load(function(){
		var navWidth = $('.navbar').width() - 30;
		$('.submenu').css('left', navWidth);
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

	//DEBUG JP GRUNFELD
	$("#Jean-PierreGrünfeld").remove();

});
