</div><?php /* closes #ortho-body */ ?>
<div id="bottom-embellishment"></div>
<hr />
<div id="ortho-footer">
	<!--[if IE]>
	<div style="float: left; margin-right: 1em; width: 40%;">
	<![endif]-->
	<div>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('west-footer-widgets') ) : ?>
			<?php if(function_exists('ajax_calendar')) {
				ajax_calendar();
			} else {
				get_calendar(true);
			} ?>
		<?php endif; ?>
	</div>
	<!--[if IE]></div><div style="float: right; margin-left: 2em; width: 40%;"><![endif]-->
	<div>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('east	-footer-widgets') ) : ?>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<h2>Meta</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_list_pages('title_li='); ?>
				<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
				<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
				<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
				<li>Powered by <a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				<?php wp_meta(); ?>
			</ul>
		<?php endif; ?>
	</div>
	<!--[if IE]></div><![endif]-->
</div>
<div id="license">
	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/us/80x15.png"/></a>&nbsp;This <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" rel="dc:type">work</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/">Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License</a>.
</div>
</div><?php /* #page */ ?>
<?php include (TEMPLATEPATH . '/external-scripts.php') ?>
<?php wp_footer(); ?>
</body>
</html>