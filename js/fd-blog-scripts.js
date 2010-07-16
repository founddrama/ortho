/**
 * @requires {jQuery} and {jCarouselLite}
 */
$(document).ready(function(){
	
	// for twitter-marquee
	$("#twitter_update_list").find("li")
		.each(function(i){
			$(this).attr("id","twit" + i);
		});

	$(function(){
		$("#twitter_div").jCarouselLite({
			btnNext: ".tNext",
			btnPrev: ".tPrev",
			auto: 3500,
			speed: 500,
			vertical: true,
			visible: 1 
		});
	});
	
	// for the Flickr badge 
	var i, w = $("#flickr_www_wrapper");
	$(".flickr_badge_image").hover(function(){
		i = $(this).children("a").children("img");
		var t = $(this).find("img").attr("title");
		
		i.css({
			border: "4px solid #ff1c92",
			margin: "-4px",
			zIndex: "200"
		});
		
		w.fadeOut("slow", function(){
			w.empty().append(t).fadeIn("slow");
		});
	}, function(){
		i.css({
			border: "none",
			margin: "0",
			zIndex: "100"
		});
		w.fadeOut("fast", function(){
			w.empty().append('flick<span style="color:#ff1c92">r</span>').fadeIn("fast");
		});
	});
	
});