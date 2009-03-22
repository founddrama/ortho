<?php get_header(); ?>

<!-- <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?> -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="ortho-content">
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="post-body">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><span class="permalink-hash">#</span></a><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		</div>
	</div>
</div>
<div class="post-meta"><div>
	<p>Originally published on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> by <?php the_author() ?>; last updated on <?php the_modified_time('l, F jS, Y') ?> at <?php the_modified_time() ?>.</p>
</div></div><hr />

<?php endwhile; ?>

<?php else : ?>
<div class="failover">
	<?php if (is_search()) { /* special .failover for search.php */ ?>
	<h2 class="center">No posts matching <?php printf(__('\'%s\''), $s); ?> found. Try a different search?</h2>
<?php } else { ?>
	<h2 class="center">No posts found. Try a different search?</h2><?php } ?>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<?php endif; ?>

<?php get_footer(); ?>