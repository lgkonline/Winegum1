<?php get_header(); ?>

		<div id="main">
			<div id="main-container" class="container">
				<?php winegum_sidebar('page', 'start'); ?>
					<div id="content">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="post">
							<h1 class="page-header post-title"><?php the_title(); ?></h1>

							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; ?>
						<ul class="pager">
							<li class="previous"><?php next_posts_link('&laquo; Older') ?></li>
							<li class="next"><?php previous_posts_link('Newer &raquo;') ?></li>
						</ul>
						<?php endif; ?>
					</div><!-- /.content -->

				<?php winegum_sidebar('page', 'end'); ?>
			</div><!-- /.container -->
		</div><!-- /#main -->
        
<?php get_footer(); ?>