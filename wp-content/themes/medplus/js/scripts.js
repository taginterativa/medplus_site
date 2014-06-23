$(document).ready(function(){
	$(".info").append("<div class='open_map'></div>");
	$(".open_map").click(function(){
		$(".map_pop_up").show();
		$(".map_pop_up").find("iframe").attr("src",$(".map_pop_up").find("iframe").attr("src"));
	});
	$(".close").click(function(){
		$(this).parent().parent().hide();
	});
	$(".request_box").each(function(){
		var rb = $(this).clone();
		rb.addClass("new");
		$(this).parent().children(".solution_container").append(rb);
		$(this).remove();
	});
	$(".client_depo").click(function(){
		$(".quotes_here").empty().append('<div class="quotes"><div class="image"><img src="'+$(this).data("picture")+'" alt=""/></div><div class="text"><p><i>'+$(this).data("text")+'</i></p><p><b>'+$(this).data("name")+'<br><font style="font-size:12px;">'+$(this).data("company")+' | '+$(this).data("job")+'</font></b></p></div></div>');
	});
	if( $("html").hasClass("ie8") ) {
		$(".styled-select").css("background","");
		if($(window).height()<800){
			$(".clients_slider").css({
				'position':'relative',
				'bottom':'0px'
			});
		}else{
			$(".clients_slider").removeAttr("style");
		}
		if($(window).height()<1500){
			$(".map_div").css({
				"left": "410px",
				"width": "800px"
			});
			$(".info").css({
				"left": "450px"
			});
			$(".contact_form .styled-select select").css({
				"width": "375px"
			});
			$(".contact_form .styled-select").css({
				"width": "375px"
			});
			$(".contact_form input[type=text]").css({
				"width": "365px"
			});
			$(".contact_form textarea").css({
				"width": "365px"
			});
			$(".contact_form input[type=submit]").css({
				"left": "-235px"
			});
			$(".sec_stripe").css({
				"background-position":"-200px 0px !important"
			});
		}else{
			$(".map_div").removeAttr("style");
			$(".info").removeAttr("style");
			$(".contact_form .styled-select select").removeAttr("style");
			$(".contact_form .styled-select").removeAttr("style");
			$(".contact_form input[type=text]").removeAttr("style");
			$(".contact_form textarea").removeAttr("style");
			$(".contact_form input[type=submit]").removeAttr("style");
			$(".sec_stripe").removeAttr("style");
		}
		$(window).resize(function(){
			if($(window).height()<800){
				$(".clients_slider").css({
					'position':'relative',
					'bottom':'0px'
				});
			}else{
				$(".clients_slider").removeAttr("style");
			}
			if($(window).height()<1500){
				$(".map_div").css({
					"left": "410px",
					"width": "800px"
				});
				$(".info").css({
					"left": "450px"
				});
				$(".contact_form .styled-select select").css({
					"width": "375px"
				});
				$(".contact_form .styled-select").css({
					"width": "375px"
				});
				$(".contact_form input[type=text]").css({
					"width": "365px"
				});
				$(".contact_form textarea").css({
					"width": "365px"
				});
				$(".contact_form input[type=submit]").css({
					"left": "-235px"
				});
				$(".sec_stripe").css({
					"background-position":"-200px 0px !important"
				});
			}else{
				$(".map_div").removeAttr("style");
				$(".info").removeAttr("style");
				$(".contact_form .styled-select select").removeAttr("style");
				$(".contact_form .styled-select").removeAttr("style");
				$(".contact_form input[type=text]").removeAttr("style");
				$(".contact_form textarea").removeAttr("style");
				$(".contact_form input[type=submit]").removeAttr("style");
				$(".sec_stripe").removeAttr("style");
			}
		});
	};
	$('input, textarea').placeholder();
	$("input[name=phone]").mask("(99) 9999-9999?9");
	$(".language").click(function(){
		$(".other").fadeToggle();
	});
	var s1 = 0;
	var s2 = 0;
	$("#fullpage").fullpage({
		//normalScrollElements: '.page_container',
        verticalCentered: false,
		easing: 'easeInOutCubic',
		scrollingSpeed: 1500,
        touchSensitivity: 30,
		scrollOverflow: true,
		onLeave: function(index, direction){
			var current = $(".section.active").data("page");
			var dsub = $(".section.active").data("sub");
			s1 = current;
			if(current!=1){
				setTimeout(function(){
					var sub_itens = $(".button[data-page="+current+"]").data("parent");
					$(".button").removeClass("active");
					$(".button[data-page="+current+"]").addClass("active");
					$(".sub_button").removeClass("active");
					$(".sub-"+dsub+"[data-sub="+sub_itens+"]").addClass("active");
					if(s2!=s1){
					$(".sub_button").slideUp();
						s2=s1;
					}
					$(".sub_button[data-sub="+sub_itens+"]").slideDown();
				},500);
			}else{
				$(".sub_button").hide();
				$(".button").removeClass("active");
				$(".sub_button").removeClass("active");
			}
        }
	});
	$(".click_page").click(function(){
		$.fn.fullpage.moveTo(parseInt($(this).data("go-to")), 0); 
	});
	var total_slides = $(".div_slide").length;
	var counter = 1;
	var cancel = 0;
	setInterval(function(){		
		if($(".section[data-page=6]").hasClass("active")){
			$(".language").css("bottom","100px");
			$(".social_icons").css("bottom","20px");
		}else{
			$(".language").removeAttr("style");
			$(".social_icons").removeAttr("style");
		}
	},1000);
	setInterval(function(){
		if(cancel==0){
			if(counter==total_slides){counter=0;}
			$(".div_slide").removeClass("active");
			$(".div_slide:eq("+counter+")").addClass("active");
			$(".nav_dot").removeClass("active");
			$(".nav_dot:eq("+counter+")").addClass("active");
			$(".h2").text($(".nav_dot:eq("+counter+")").data("subtitle"));
			$(".h1").text($(".nav_dot:eq("+counter+")").data("title"));
			counter=counter+1;
		}
	},8000);
	$(".nav_dot").click(function(){
		$(".div_slide").removeClass("active");
		$(".div_slide:eq("+$(this).index()+")").addClass("active");
		$(".nav_dot").removeClass("active");
		$(".nav_dot:eq("+$(this).index()+")").addClass("active");
		$(".h2").text($(this).data("subtitle"));
		$(".h1").text($(this).data("title"));
		cancel = 1;
	});	
	var mySwiper = new Swiper('.swiper-container',{
		centeredSlides: true,
		slidesPerView: "auto",
		speed:2000,
		loop: true
	})
	$(".arrow_left").click(function(){
		mySwiper.swipePrev();
	});
	$(".arrow_right").click(function(){
		mySwiper.swipeNext();
	});
});
$(function() {

	var $c = $('#carousel'),
		$w = $(window);

	$c.carouFredSel({
		align: false,
		items: 10,
		scroll: {
			items: 1,
			duration: 2000,
			timeoutDuration: 0,
			easing: 'linear',
			pauseOnHover: 'immediate'
		}
	});

	
	$w.bind('resize.example', function() {
		var nw = $w.width();
		if (nw < 990) {
			nw = 990;
		}

		$c.width(nw * 3);
		$c.parent().width(nw);

	}).trigger('resize.example');

});