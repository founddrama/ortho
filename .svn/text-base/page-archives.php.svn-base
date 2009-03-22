<?php get_header(); ?>

<!-- <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?> -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post archives" id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><span class="permalink-hash">#</span><?php the_title(); ?></a></h2>
	<div class="entry">
		<ul style="list-style-type:none;">
			<?php compact_archive($style='block'); ?>
		</ul>
		<?php the_content('Read the rest of this entry &raquo;');
		/* above is to allow inclusion of content beneath compact_archives */?>
	</div>
</div><hr />

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