<?php /* Start of Flickr Badge */ ?>
<?php /*
Images are wrapped in divs classed "flickr_badge_image" with ids
"flickr_badge_imageX" where "X" is an integer specifying ordinal position.
Below are some styles to get you started!
*/ ?>
<script type="text/javascript">
$(document).ready(function(){
	var i, w = $("#flickr_www_wrapper");
	
	$(".flickr_badge_image").hover(function(){
		i = $(this).children("a").children("img");
		var t = $(this).find("img").attr("title");
		
		i.css({ border:"4px solid #ff1c92", margin:"-4px", zIndex:"1000" });
		w.fadeOut("slow", function(){
			w.empty().append(t).fadeIn("slow");
		});
	}, function(){
		i.css({ border:"none", margin: "0", zIndex:"100" });
		w.fadeOut("fast", function(){
			w.empty().append("flick<span style=\"color:#ff1c92\">r</span>").fadeIn("fast");
		});
	});
});
</script>
<div id="flickr_badge_uber_wrapper"><div id="flickr_badge_wrapper"><script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=10&display=random&size=s&layout=x&source=user&user=28555778%40N00"></script></div><a href="http://www.flickr.com" id="flickr_www"><span id="flickr_www_wrapper">flick<span style="color:#ff1c92">r</span></span></a></div><hr />
<?php /* End of Flickr Badge */ ?>