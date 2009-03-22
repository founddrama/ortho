<div id="ortho-content">
	<?php if ((!is_single() and !is_home()) or is_paged()) { /* Headlines for archives */ ?>
		<h2 class="pagetitle">
			<?php if (is_category()) { /* Figure out what kind of page is being shown */ ?>
				Archive for the &#8220;<?php single_cat_title(); ?>&#8221; category
			<?php } elseif (is_day()) { ?>
				Archive for <?php the_time('F jS, Y'); ?>
			<?php } elseif (is_month()) { ?>
				Archive for <?php the_time('F Y'); ?>
			<?php } elseif (is_year()) { ?>
				Archive for <?php the_time('Y'); ?>
			<?php } elseif (is_search() and have_posts()) { 					printf(__('Search Results for \'%s\''), $s); ?>
			<?php } elseif (function_exists('is_tag') and is_tag()) { 
				/* need to add support for Tags? */
				printf(__('Tag Archive for \'%s\'','$s'), get_query_var('tag') ); ?>
			<?php } elseif (is_author()) { ?>
				Author Archive
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				Blog Archives
			<?php } ?>
		</h2>
	<?php } ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post-body">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><span>#</span><?php the_title(); ?></a></h2>
			<?php if (!is_single()) { ?>
				<div class="post-meta post-meta-border">
					&para; <?php the_time('F jS, Y') ?> by <?php the_author() ?> @ <?php the_category(' &amp; ') ?>&nbsp;&sect;&nbsp;<?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?> <?php edit_post_link('<span class="alignright">&nbsp;[ &#x2710; Edit ]</span>'); ?>
				</div>
			<?php } ?>
					
				<div class="entry">
					<?php the_content('<p class="readmore">Read the rest of this entry &raquo;</p>'); ?>
				</div>
			</div>
		</div><hr />
	
<?php if (is_single()) { /* handle .post-meta differently on single.php */ ?>
</div><?php /* for is_single() : close #ortho-content */ ?>
	<div class="post-meta"><div>
		<p>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> by <?php the_author() ?> in <?php the_category(', ') ?>.</p>
		<p><span class="entry-tags"><?php the_tags('Tagged as ', ', ', '.'); ?></span></p>
		<p><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>  You can also follow responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.</p>
	<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
		// Both Comments and Pings are open ?>
		<p>You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.</p>
	<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
		// Only Pings are Open ?>
		<p>Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.</p>
	<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
		// Comments are open, Pings are not ?>
		<p>You can skip to the end and leave a response. Pinging is currently not allowed.</p>
	<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
		// Neither Comments, nor Pings are open ?>
		<p>Both comments and pings are currently closed.</p>
	<?php } ?><!-- <?php trackback_rdf(); ?> --> 
	<?php edit_post_link('<p>The author? Edit this entry.</p>','',''); ?>
	
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('single-page-widgets') ) : ?>
	<?php endif; ?>
	
</div></div><hr />
<?php } ?>
	
<?php endwhile; /* that ends the loop */ ?>

<?php if (is_single()) { /* only include discussion/comments on single.php */ ?>
	<div id="discussion">
		<?php comments_template(); ?>
	</div><hr />
	<div class="navigation">
		<?php previous_post('<div class="alignleft"><span>&laquo;</span> %</div>','','yes') ?>
		<?php next_post('<div class="alignright">% <span>&raquo;</span></div>','','yes') ?>
	</div><hr />
<?php } else { ?>
	<div class="navigation">
		<?php posts_nav_link('','<div class="alignright">Next Entries &raquo;</div>','<div class="alignleft">&laquo; Previous Entries</div>') ?>
	</div><hr />
<?php } ?>

<?php else : ?>
<div class="failover">
	<?php if (is_search()) { /* special .failover for search.php */ ?>
	<h2 class="center">No posts matching <?php printf(__('\'%s\''), $s); ?> found. Try a different search?</h2>
<?php } else { ?>
	<h2 class="center">No posts found. Try a different search?</h2><?php } ?>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
<?php endif; ?>

<?php if (!is_single()) { /* only include the sidebar when we're in the running narrative */?>
	</div>
	<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
<?php } ?>