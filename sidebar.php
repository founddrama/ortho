<ul id="ortho-sidebar">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('ortho-sidebar') ) : ?>
		<?php if(function_exists('ajax_calendar')) {
			ajax_calendar();
		} else {
			get_calendar(true);
		} ?>
	<?php endif; ?>
</ul>