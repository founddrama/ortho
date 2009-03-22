<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); if (function_exists('is_tag') and is_tag()) { ?>Tag Archive for <?php echo $tag; } if (is_archive()) { ?> archive<?php } elseif (is_search()) { ?> Search for <?php echo $s; } if ( !(is_404()) and (is_search()) or (is_single()) or (is_page()) or (function_exists('is_tag') and is_tag()) or (is_archive()) ) { ?> at <?php } ?> <?php bloginfo('name'); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <?php /* leave this for stats */ ?>
	<meta name="template" content="Ortho" />
 	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/plugin-style.css" />
	<!--[if IE]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/ie-style.css" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/ie6-style.css" /><![endif]-->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<?php if (is_single() or is_page()) { ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="canonical" href="<?php the_permalink() ?>" />
	<?php } ?>
	<?php /* <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script> */ ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jcarousellite.js"></script>
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="ortho-page">
	<div id="ortho-masthead">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<ul class="menu">
			<li><a href="<?php echo get_option('home'); ?>/">&#x2302; home </a></li>
			<?php wp_list_pages('title_li='); ?>
		</ul><hr />
		<?php include (TEMPLATEPATH . '/oblique-include.php') ?>
	</div>
	<div id="ortho-body">
		<?php include (TEMPLATEPATH . '/flickr-badge.php') ?>
		<?php include (TEMPLATEPATH . '/twitter-marquee.php') ?>