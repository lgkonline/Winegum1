<?php get_header(); ?>

		<div id="main">
			<div id="main-container" class="container">
				<?php winegum_sidebar('search', 'start'); ?>
					<div id="content">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="post">
							<h4 class="page-header post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; ?>
						<ul class="pager">
							<li class="previous"><?php next_posts_link('&laquo; Older') ?></li>
							<li class="next"><?php previous_posts_link('Newer &raquo;') ?></li>
						</ul>
						<?php else : ?>
						<div class="alert alert-info">
							<h2>Sorry, nothing found.</h2>
						</div>
						<?php endif; ?>
					</div><!-- /.content -->
				<?php winegum_sidebar('search', 'end'); ?>
			</div><!-- /.container -->
		</div><!-- /#main -->
        

<?php get_footer(); ?>
<script>
	$(document).ready(function() {
		search_toggle();
	});
</script>