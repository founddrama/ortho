<?php
	/* functions.php: mostly for register_sidebar() */
	if ( function_exists('register_sidebar') )
		register_sidebar(array('name'=>'ortho-sidebar'));
		register_sidebar(array('name'=>'west-footer-widgets',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		));
		register_sidebar(array('name'=>'east-footer-widgets',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		));
		register_sidebar(array('name'=>'single-page-widgets',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		));
?>