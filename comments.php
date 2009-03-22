<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>



<?php /* You can start editing here. */ ?>
<div id="current-comments">
	<h3><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;

<?php if ($comments) : ?>
	</h3><div class="comment-track"><a href="#comment-container">&#x21AA; jump to comment form</a>&nbsp;|&nbsp;<?php comments_rss_link('RSS 2.0'); if ('open' == $post->ping_status) : ?>&nbsp;|&nbsp;<a href="<?php trackback_url(true); ?>" rel="trackback">ping</a> <?php endif; ?></div><hr />
	<ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>
	<?php $comment_type = get_comment_type(); ?>
	<?php if($comment_type == 'comment') { ?>
		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			<cite><?php comment_author_link() ?>:</cite>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<hr />
			<?php comment_text() ?>
			<span class="commentmetadata"><b>&para;&nbsp;</b><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('[edit]','',''); ?></span><hr />
		</li>

	<?php // Changes every other comment to a different class
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
	
	<?php } else { $trackback = true; } // End of is_comment statement ?>
	<?php endforeach; // end for each comment ?>
	</ol>
	
		 <?php if ($trackback == true) { ?>
			<h3>Trackbacks</h3>
			<ol class="commentlist">
				<?php foreach ($comments as $comment) : ?>
				<?php $comment_type = get_comment_type(); ?>
				<?php if($comment_type != 'comment') { ?>
					<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
						<cite><?php comment_author_link() ?></cite>
						<span class="commentmetadata"><b>&para;&nbsp;</b><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('[edit]','',''); ?></span><hr />
					</li>
					
				<?php // Changes every other comment to a different class
					if ('alt' == $oddcomment) $oddcomment = '';
					else $oddcomment = 'alt';
				?>
					
				<?php } ?>
				<?php endforeach; ?>
			</ol>
		<?php } ?>

 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		yet.</h3><?php // If comments are open, but there are no comments. ?>
		<div class="comment-track"><?php comments_rss_link('RSS 2.0'); if ('open' == $post->ping_status) : ?>&nbsp;|&nbsp;<a href="<?php trackback_url(true); ?>" rel="trackback">ping</a> <?php endif; ?></div><hr />

	 <?php else : // comments are closed ?>
		.</h3>

	<?php endif; ?>
<?php endif; ?>
</div>


<?php if ('open' == $post->comment_status) : ?>
<a name="comment-container"></a>
<div id="comment-form-container">
	<h3>Leave a Comment:</h3>
	
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
	
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<!--[if IE 6]><div style="display: inline; float: left; width: 70%;"><![endif]-->
	<div id="commentform-west">
		<textarea name="comment" id="comment" cols="56" rows="8" tabindex="4"></textarea>
	</div>
	<!--[if IE 6]></div><div style="display: inline; float: right; margin-right: 20px; width: 22%;"><![endif]-->
	<div id="commentform-east">
	<?php if ( $user_ID ) : ?>
		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <small><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout? &raquo;</a></small></p>
	<?php else : ?>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="21" tabindex="1" class="required" />
		<label for="author">&#x21B3; Name <?php if ($req) echo "(required)"; ?></label>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="21" tabindex="2" class="required" />
		<label for="email">&#x21B3; Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="21" tabindex="3" />
		<label for="url">&#x21B3; Website</label>
	<?php endif; ?>
	
	<br />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<input type="submit" value="[ submit comment ]" />
	</p>
	<?php do_action('comment_form', $post->ID); ?>
	</div>
	<!--[if IE 6]></div><![endif]-->
	<hr /></form>
</div><!-- #comment-form -->

<?php endif; // If registration required and not logged in ?>

<?php else : // If comments are closed? ?>
<div>
	<span class="nocomments">Comments are closed.</span>
</div>


<?php endif; // if you delete this the sky will fall on your head ?>
