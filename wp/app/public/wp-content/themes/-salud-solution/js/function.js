// jQuery easing
(function(factory){if(typeof define==="function"&&define.amd){define(["jquery"],function($){return factory($)})}else if(typeof module==="object"&&typeof module.exports==="object"){exports=factory(require("jquery"))}else{factory(jQuery)}})(function($){$.easing.jswing=$.easing.swing;var pow=Math.pow,sqrt=Math.sqrt,sin=Math.sin,cos=Math.cos,PI=Math.PI,c1=1.70158,c2=c1*1.525,c3=c1+1,c4=2*PI/3,c5=2*PI/4.5;function bounceOut(x){var n1=7.5625,d1=2.75;if(x<1/d1){return n1*x*x}else if(x<2/d1){return n1*(x-=1.5/d1)*x+.75}else if(x<2.5/d1){return n1*(x-=2.25/d1)*x+.9375}else{return n1*(x-=2.625/d1)*x+.984375}}$.extend($.easing,{def:"easeOutQuad",swing:function(x){return $.easing[$.easing.def](x)},easeInQuad:function(x){return x*x},easeOutQuad:function(x){return 1-(1-x)*(1-x)},easeInOutQuad:function(x){return x<.5?2*x*x:1-pow(-2*x+2,2)/2},easeInCubic:function(x){return x*x*x},easeOutCubic:function(x){return 1-pow(1-x,3)},easeInOutCubic:function(x){return x<.5?4*x*x*x:1-pow(-2*x+2,3)/2},easeInQuart:function(x){return x*x*x*x},easeOutQuart:function(x){return 1-pow(1-x,4)},easeInOutQuart:function(x){return x<.5?8*x*x*x*x:1-pow(-2*x+2,4)/2},easeInQuint:function(x){return x*x*x*x*x},easeOutQuint:function(x){return 1-pow(1-x,5)},easeInOutQuint:function(x){return x<.5?16*x*x*x*x*x:1-pow(-2*x+2,5)/2},easeInSine:function(x){return 1-cos(x*PI/2)},easeOutSine:function(x){return sin(x*PI/2)},easeInOutSine:function(x){return-(cos(PI*x)-1)/2},easeInExpo:function(x){return x===0?0:pow(2,10*x-10)},easeOutExpo:function(x){return x===1?1:1-pow(2,-10*x)},easeInOutExpo:function(x){return x===0?0:x===1?1:x<.5?pow(2,20*x-10)/2:(2-pow(2,-20*x+10))/2},easeInCirc:function(x){return 1-sqrt(1-pow(x,2))},easeOutCirc:function(x){return sqrt(1-pow(x-1,2))},easeInOutCirc:function(x){return x<.5?(1-sqrt(1-pow(2*x,2)))/2:(sqrt(1-pow(-2*x+2,2))+1)/2},easeInElastic:function(x){return x===0?0:x===1?1:-pow(2,10*x-10)*sin((x*10-10.75)*c4)},easeOutElastic:function(x){return x===0?0:x===1?1:pow(2,-10*x)*sin((x*10-.75)*c4)+1},easeInOutElastic:function(x){return x===0?0:x===1?1:x<.5?-(pow(2,20*x-10)*sin((20*x-11.125)*c5))/2:pow(2,-20*x+10)*sin((20*x-11.125)*c5)/2+1},easeInBack:function(x){return c3*x*x*x-c1*x*x},easeOutBack:function(x){return 1+c3*pow(x-1,3)+c1*pow(x-1,2)},easeInOutBack:function(x){return x<.5?pow(2*x,2)*((c2+1)*2*x-c2)/2:(pow(2*x-2,2)*((c2+1)*(x*2-2)+c2)+2)/2},easeInBounce:function(x){return 1-bounceOut(1-x)},easeOutBounce:bounceOut,easeInOutBounce:function(x){return x<.5?(1-bounceOut(1-2*x))/2:(1+bounceOut(2*x-1))/2}})});
// functions

(function($){
	"use strict";
	function hasbg(){
		if ($(".hasbg").length){
			$(".hasbg").css({
				"background-image":function(){
					var bgimg = $(this).children("img").attr("src");
					var src = "url(" + bgimg + ")";
					return src;
				}
			});
		}
	}
	
	function spmenu(){
	    $(".saludM").click(function(){
			$(".mobile-btn>div").removeClass("active");
			$(".saludM").removeClass("saludM-move");
			$(".saludM .saludMbg").css("display","none");
			$(".sp-wrapper").removeClass("sp-wrapper-move");
			$(".header").css("left","0");
			$(document).unbind("scroll.unable");
			
		});

	    if ($(".mobile-btn").length){
	    	var togglenav = $(".mobile-btn");
			togglenav.on("click", function(){
				if(!togglenav.children("div").hasClass("active")){
			  		event.stopPropagation();
			  		togglenav.children("div").addClass("active");
					$(".saludM").addClass("saludM-move");
					$(".saludM .saludMbg").css("display","block");
					$(".sp-wrapper").addClass("sp-wrapper-move");
					$(".header").css("left","-240px");
					var top = $(document).scrollTop();
					$(document).on('scroll.unable',function(e){
			        	$(document).scrollTop(top);
			    	})
				}else{
					togglenav.children("div").removeClass("active");
					$(".saludM").removeClass("forrealizeM-move");
					$(".saludM .saludMbg").css("display","none");
					$(".sp-wrapper").removeClass("sp-wrapper-move");
					$(".header").css("left","0");
					$(document).unbind("scroll.unable");
				}
			});
	    }
	};
	
	$(document).ready(function(){
		hasbg();
		spmenu();
		
		$(".headerNav li a").click(function(){
			var href = $(this).attr("href");
			var pos = $(href).offset().top - 52;
			$("html,body").stop().animate({scrollTop: pos}, 600,'swing');
			return false;
		});
		
		$(".sp-wrapper li a").click(function(){
			$(".mobile-btn>div").removeClass("active");
			$(".saludM").removeClass("saludM-move");
			$(".saludM .saludMbg").css("display","none");
			$(".sp-wrapper").removeClass("sp-wrapper-move");
			$(".header").css("left","0");
			$(document).unbind("scroll.unable");
			
			var href = $(this).attr("href");
			var pos = $(href).offset().top - 52;
			setTimeout(function(){
				$("html,body").stop().animate({scrollTop: pos}, 600,'swing');
			},300);
			return false;
		});
		
		//bkt
		$(".bkt").on("click",function(){
			$('body,html').animate({
				scrollTop: 0
			},1600, 'easeOutQuint');
			return false;
		});
	});
	$(window).on("scroll load",function(){
		if($(window).scrollTop() > 0){
			$(".header").addClass("header_fixed");
		}else{
			$(".header").removeClass("header_fixed");
		}
		
		//bkt
		var backtop = $(".bkt");
		if ($(this).scrollTop() > 350){
			backtop.stop().fadeIn(300);
		} else {
			backtop.stop().fadeOut(300);
		}
	});
	$(window).bind("resize load",function(){});
	$(window).load(function(){
		setTimeout(function(){
			$.ajax({
				type: "GET",
				url: themeurl + "/js/googlemap.html",
				dataType: "html",
				context: document.body,
				beforeSend: function(){},
				success: function(data) {
					var result = $(data);
					$(".googlemap").html(result);
				},
				complete: function() {
					$('iframe').css("pointer-events", "none");
					var onMapMouseleaveHandler = function() {
							var that = $(this);
							that.on('click', onMapClickHandler);
							that.off('mouseleave', onMapMouseleaveHandler);
							that.find('iframe').css("pointer-events", "none");
						};
					var onMapClickHandler = function() {
							var that = $(this);
							that.off('click', onMapClickHandler);
							that.find('iframe').css("pointer-events", "auto");
							that.on('mouseleave', onMapMouseleaveHandler);
						};
					$('.embed-container').on('click', onMapClickHandler);
				}
			});
		}, 2000);
		setTimeout(function(){
			$(".banner .bannercon h3").addClass("banshow");
		},10);
	});
})(jQuery);
