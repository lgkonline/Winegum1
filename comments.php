
<hr>

<div id="comment-form">
	<form class="form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
		<textarea class="form-control" rows="4" name="comment" placeholder="..."></textarea>
		<br>
		<div id="comment-form-more" class="row">
			<div class="col-sm-10">
				<div class="form-horizontal">
					<div class="form-group">
						<label for="comment-form-author" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" id="comment-form-author" name="author" value="<?php echo $comment_author; ?>" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="comment-form-email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" id="comment-form-email" name="email" value="<?php echo $comment_author_email; ?>" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="comment-form-website" class="col-sm-2 control-label">Website</label>
						<div class="col-sm-10">
							<input type="text" id="comment-form-website" name="url" value="<?php echo $comment_author_url; ?>" class="form-control">
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-2">
				<button type="submit" class="btn btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
		</div>
		
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
		<?php do_action('comment_form', $post->ID); ?>
	</form>
</div>

<hr class="visible-xs visible-sm">

<div id="comment-entries">
	<?php foreach ($comments as $comment) : ?>
	<div class="comment panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php comment_author_link() ?>, <?php comment_date('j. F Y') ?> <?php comment_time('H:i') ?></h3>
		</div>
		
		<div class="comment-text panel-body">
			<?php comment_text() ?>
			
			<?php if ($comment->comment_approved == '0') : ?>
			<div class="alert alert-info">
			Note that your comment has to get unlocked first.
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endforeach; ?>
</div>


<?php if ( ! comments_open() && get_comments_number() ) : ?>
<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
<?php endif; ?>