<?php get_header(); ?>

		<div id="main">
			<div id="main-container" class="container">
				<?php winegum_sidebar('single', 'start'); ?>
					<div id="content">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="post">
							<h1 class="page-header post-title"><?php the_title(); ?></h1>

							<div class="post-content">
								<?php the_content(); ?>
							</div>

							<div class="post-meta">
								<li>
									<span class="glyphicon glyphicon-calendar"></span> <?php the_date('d.m.Y'); ?>
								</li>

								<li>
									<span class="glyphicon glyphicon-user"></span> <?php the_author(); ?>
								</li>
								
								<ul class="nav nav-pills">
								<?php
									$categories = get_the_category();
									$output = '';
									if ($categories) {
										foreach ($categories as $category) {
											$output .= '<li><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></li>';
										}

										echo $output;
									}
								?>	
								</ul>
							</div>							
						</div>
						<?php endwhile; ?>
						<ul class="pager">
							<li class="previous"><?php next_posts_link('&laquo; Older') ?></li>
							<li class="next"><?php previous_posts_link('Newer &raquo;') ?></li>
						</ul>
						<?php endif; ?>
					</div><!-- /.content -->

					<?php comments_template(); ?>
				<?php winegum_sidebar('single', 'end'); ?>
			</div><!-- /.container -->
		</div><!-- /#main -->
        
<?php get_footer(); ?>