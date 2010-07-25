// @namespace
var F_D = {};


// Tumblr 
F_D.buildTumbls = function(json){
	var	posts		= json.posts,
		ulString	= "<ul>";
	
	while (posts.length > 0) {
		var p = posts.shift(),
			li = ['<li><a href="', p.url, '">'],
			txt;
		
		switch(p.type){
			// @todo - case "audio":
			// @todo - case "conversation":
			case "link":
				txt = p["link-text"];
				break;
			case "photo":
				txt = p["photo-caption"] || "(uncaptioned)";
				break;
			case "quote":
				txt = p["quote-text"];
				if (txt.length > 100) {
					txt = txt.substr(0, 100);
					txt = txt.substr(0, txt.lastIndexOf(" ")) + "...";
				}
				break;
			case "regular":
				txt = p["regular-title"];
				break;
			// @todo - case "audio":
		}
		
		li.push(txt, '</a></li>');
		
		ulString += li.join('');
	}
	
	return ulString;
};

F_D.writeTumblrList = function(divId, json){
	var	blog	= json.tumblelog,
		posts	= F_D.buildTumbls(json),
		widget	= $("#" + divId);
	
	widget.closest("li").children("h2")
		.addClass("tumblr-list")
		.empty().append(blog.title)
		.wrap('<a href="http://'+blog.name+'.tumblr.com/" />');
	widget.append(posts);
};

F_D.notanotherrobOut = function(json){
	F_D.writeTumblrList("notanotherrob", json);
};

F_D.notundefinedOut = function(json){
	F_D.writeTumblrList("notundefined", json);
};

F_D.notnonfictionOut = function(json){
	F_D.writeTumblrList("notnonfiction", json);
};

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