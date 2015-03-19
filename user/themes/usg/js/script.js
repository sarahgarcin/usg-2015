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
	                                                                                                                      
	function OpenPopup($link, $this, e) {
		$dialog.dialog({
	    	autoOpen: false,
	    	appendTo: ".panzoom",
	    	position: { my: "right-150 center-50", at: "right-150 center-50", of: window },
	    	modal: true,
	    	height: $(window).height() / 1.5,
	    	width: $(window).width() / 1.7,       
	 	});
	 	$dialog.load($link + " .container");
		$dialog.dialog('open');
		//Close Pop when click outside
		$('.panzoom').on('click tap', function (e){
    	if (!$dialog.is(e.target) && $dialog.has(e.target).length === 0){
        $dialog.dialog("close");
    	}
		});
	}


	//Requestion Animation Frame 
	//http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
  window.requestAnimFrame = (function(){
  	return  window.requestAnimationFrame       || 
          window.webkitRequestAnimationFrame || 
          window.mozRequestAnimationFrame    || 
          window.oRequestAnimationFrame      || 
          window.msRequestAnimationFrame     || 
          function(/* function */ callback, /* DOMElement */ element){
            window.setTimeout(callback, 1000 / 60);
          };
	})();
  

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
		shouldEase: false,
		// start: function(e){
		// 	addEase.start(this.el.id, e.clientX, e.clientY, e.timeStamp);
		// },
		// stop: function(e){
		// 	addEase.end(this.el.id, e.clientX, e.clientY, e.timeStamp);
		// }
	});

// var addEase = new function () {
	// 	// Ease In Function
	// 	// Params: Time, Begin, Change (Finish - Begin), Duration
	// 	var easeIn = function(t, b, c, d) {
	// 	    return -c *(t/=d)*(t-2) + b;
	// 	};
	// 	// Starting time and duration.
	// 	var seconds = 0.5;
	// 	var time = 0;
	// 	var duration = 60 * seconds;

 //    var dXa =[0];
 //    var dYa =[0];
 //    var dTa =[0]; 

 //    this.start = function (elemId, Xa, Ya, Ta)  {
 //      dXa[elemId] = Xa;
 //      dYa[elemId] = Ya;
 //      dTa[elemId] = Ta;        
 //    }; 
    
 //    thi s.end = function (elemId, Xb, Yb, Tb)  {    
 //      var Xa = dXa[elemId];
 //      var Ya = dYa[elemId];
 //      var Ta = dTa[elemId];


 //      // Called on each frame.
	// 		var onEnterFrame = function () {

	// 		    var distX =  (Xa - Xb);
 //      		var distY =  (Ya - Yb);

	// 		    // Easing into the target.
	// 		    distX = easeIn(1, Xb, distX, duration);
	// 		    distY = easeIn(1, Yb, distY, duration);

	// 		    // CSS Transform
	// 		    $(".panzoom").css('transform', 'translate(' + distX + 'px, ' +distY + 'px)');
			    
	// 		    // Increase time.
	// 		    time++;
	// 		};

	// 		// Initial animation loop.
	// 		// Checks to see if it's necessary
	// 		(function animationLoop () {
 //    			requestAnimFrame(animationLoop);
 //    			onEnterFrame();
	// 		})();
    
	// 	};

	// };

// var dragMomentum = new function () {    
 //    var howMuch = 200;  // change this for greater or lesser momentum
 //    var minDrift = 10; // minimum drift after a drag move
 //    var easeType = 'easeOutCirc';

 //    var dXa =[0];
 //    var dYa =[0];
 //    var dTa =[0];
    
 //    this.start = function (elemId, Xa, Ya, Ta)  {
 //      dXa[elemId] = Xa;
 //      dYa[elemId] = Ya;
 //      dTa[elemId] = Ta;        
 //    }; // END dragmomentum.start()

 //    this.end = function (elemId, Xb, Yb, Tb)  {    
 //        var Xa = dXa[elemId];
 //        var Ya = dYa[elemId];
 //        var Ta = dTa[elemId];
 //        var Xc = 0;
 //        var Yc = 0;

 //        var dDist = Math.sqrt(Math.pow(Xa-Xb, 2) + Math.pow(Ya-Yb, 2));
 //        var dTime = Tb - Ta;
 //        var dSpeed = dDist / dTime;
 //        dSpeed=Math.round(dSpeed*100)/100;

 //        var distX =  Math.abs(Xa - Xb);
 //        var distY =  Math.abs(Ya - Yb);

 //        var dVelX = (minDrift+(Math.round(distX*dSpeed*howMuch / (distX+distY))));
 //        var dVelY = (minDrift+(Math.round(distY*dSpeed*howMuch / (distX+distY))));

 //        var position = $('.'+elemId).position();
 //        var locX = position.left;
 //        var locY = position.top;
        
 //        if ( Xa > Xb ){  // we are moving left
 //            Xc = locX - dVelX;
 //        } else {  //  we are moving right
 //            Xc = locX + dVelX;
 //        }
    
 //        if ( Ya > Yb ){  // we are moving up
 //            Yc = (locY - dVelY);
 //        } else {  // we are moving down
 //            Yc = (locY + dVelY);
 //        }
        
 //        var newLocX = Xc + "px";
 //        var newLocY = Yc + "px";

 //        // var elementX = newLocX - locX;
 //        // var elementY = newLocY - locY;
        
 //        $('.'+elemId).animate({ left:newLocX, top:newLocY }, 500, easeType );
 //        //console.log(('transform', 'translate3d('+ elementX+ 'px,'+ elementY +'px, 0)'));

 //    //     (function animationLoop () {
 //    // 			requestAnimFrame(animationLoop);
 //    // 			$(".panzoom").css('transform', 'translate('+ elementX+ 'px,'+ elementY +'px)');

	// 			// })();
 //        // function animate() {
    			
 //    			// $('.'+elemId).css({
	//          //	"-webkit-transform":"translate3d("+newLocX+","+newLocY+",0)",
	//       //   	"-moz-transform":"translate3d("+newLocX+","+newLocY+",0)",
	//       //   	"-o-transform":"translate3d("+newLocX+","+newLocY+",0)",
	//       //   	"transform":"translate3d("+newLocX+","+newLocY+",0)"
 //       //  	});
 //        	// requestAnimFrame(animate);
	// 			//}
	// 			//requestAnimFrame(animate);
 //        // $('.'+elemId).css({
 //        // 	"-webkit-transform":"translate3d("+newLocX+","+newLocY+",0)",
 //        // 	"-moz-transform":"translate3d("+newLocX+","+newLocY+",0)",
 //        // 	"-o-transform":"translate3d("+newLocX+","+newLocY+",0)",
 //        // 	"transform":"translate3d("+newLocX+","+newLocY+",0)"
 //        // });
 //    }; // END  dragmomentum.end()
	// };  // END dragMomentum
 

	// //EaseOnDraggable();

	// function EaseOnDraggable(){
 //    var $d = $(".panzoom");

 //    var x1, x2,
 //        y1, y2,
 //        t1, t2;  // Time

 //    var minDistance = 40; // Minimum px distance object must be dragged to enable momentum.

 //    var onMouseMove = function(e) {
 //        var mouseEvents = $d.data("mouseEvents");
 //        if (e.timeStamp - mouseEvents[mouseEvents.length-1].timeStamp > 40) {
 //            mouseEvents.push(e);
 //            if (mouseEvents.length > 2) {
 //                mouseEvents.shift();
 //            }
 //        }
 //    }

 //    var onMouseUp = function() {
 //      $(document).unbind("mousemove mouseup");
 //    }

 //    $d.draggable({
 //        start: function(e, ui) {
 //            $d.data("mouseEvents", [e]);
 //            $(document)
 //                .mousemove(onMouseMove)
 //                .mouseup(onMouseUp);
 //        },
 //        stop: function(e, ui) {
 //            $d.stop();
 //           $d.css("text-indent", 100);

 //            var lastE = $d.data("mouseEvents").shift();

 //            x1 = lastE.pageX;
 //            y1 = lastE.pageY;
 //            t1 = lastE.timeStamp;
 //            x2 = e.pageX;
 //            y2 = e.pageY;
 //            t2 = e.timeStamp;

 //            // Deltas
 //            var dX = x2 - x1,
 //                dY = y2 - y1,
 //                dMs = Math.max(t2 - t1, 1);

 //            // Speeds
 //            var speedX = Math.max(Math.min(dX/dMs, 1), -1),
 //                speedY = Math.max(Math.min(dY/dMs, 1), -1);
 //            console.log(speedX);

 //            // Distance moved (Euclidean distance)
 //            var distance = Math.sqrt(Math.pow(x1-x2, 2) + Math.pow(y1-y2, 2));

 //            if (distance > minDistance) {
 //                // Momentum
 //                var lastStepTime = new Date();
 //                $d.animate({ textIndent: 0 }, {
 //                    duration: Math.max(Math.abs(speedX), Math.abs(speedY)) * 2000,
 //                    step: function(currentStep){
 //                        speedX *= (currentStep / 100);
 //                        speedY *= (currentStep / 100);

 //                        var now = new Date();
 //                        var stepDuration = now.getTime() - lastStepTime.getTime();

 //                        lastStepTime = now;

 //                        var position = $d.position();

 //                        var newLeft = (position.left + (speedX * stepDuration / 2)),
 //                            newTop = (position.top + (speedY * stepDuration / 2));

 //                        $d.css({
 //                          static  left: newLeft+"px",
 //                            top: newTop+"px"
 //                        });
 //                    }
 //                });
 //            }
 //        }
 //    });
	// };

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
			    OpenPopup($link, $elementObj);
					return false;
			  }, 1000);
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
	$dialog.on('click',$dialogLeft, animateLeft);
	$dialog.on('click',$dialogRight, animateRight);

	function animateLeft(event){
		var dialogWidth = $('.ui-dialog').width();
		var rowWidth = ((dialogWidth * 50) / 100) + dialogWidth;
		var colonneWidth = (rowWidth * 33) / 100; 
		var leftMove = colonneWidth / 2;
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
				left: leftMove
			});
		};
	}
	function animateRight(){
		var dialogWidth = $('.ui-dialog').width();
		var rowWidth = ((dialogWidth * 50) / 100) + dialogWidth;
		var colonneWidth = (rowWidth * 33) / 100; 
		var leftMove = colonneWidth / 2;
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

	$ElementToggle.addClass('active');

	 $ToogleMenu.click(function(){
	 	$ElementToggle.slideToggle({
	 		duration: 700,
	 	});
	 	var widthMenu = $(".navbar").width();
	 	$('.submenu').css("left", widthMenu-30);
	});

	// .-. .-. .-. 
	// |   `-. `-. 
	// `-' `-' `-' 
	var h2Size = $(window).width() / 300 + "em";
	var h1Size = $(window).width() / 150 + "em";
	var h3Size = $(window).width() / 450 + "em";
	$('.title h2').css('font-size', h2Size);
	$('.title h1').css('font-size', h1Size);
	$('.title h3').css('font-size', h3Size);

	jQuery.fn.center = function (){
    this.css("position","absolute");
    this.css("top", ($('.panzoom').height() / 3) - (this.height() / 2));
    this.css("left", ($('.panzoom').width() / 2) - (this.outerWidth() / 2));
    return this;
	}

	$('.title').center();
	$(window).resize(function(){
	   $('.title').center();
	});

});
