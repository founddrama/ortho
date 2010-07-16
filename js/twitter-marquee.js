/**
 * @requires {jQuery} and {jCarouselLite}
 */
$(document).ready(function(){
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
});