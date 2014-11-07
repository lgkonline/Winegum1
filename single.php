<?php get_header(); ?>

		<div id="main">
			<div class="container">
				<div id="content">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<div class="post">
						<div class="post-meta">
							<li>
								<span class="glyphicon glyphicon-calendar"></span> <?php the_date('d.m.Y'); ?>
							</li>
							
							<li>
								<span class="glyphicon glyphicon-user"></span> <?php the_author(); ?>
							</li>
<!--							<li><hr></li>-->
							<ul class="nav nav-pills nav-stacked">
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
					
						<h1 class="post-title"><?php the_title(); ?></h1>
						
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
			</div><!-- /.container -->
		</div><!-- /#main -->
        
<?php get_footer(); ?>