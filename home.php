<?php get_header(); 

$is_sidebar = is_active_sidebar('sidebar');
?>

		<div id="main">
			<div id="main-container" class="container">
				<?php if ($is_sidebar) : ?>
				<div class="row">
					<div class="col-md-9">
				<?php endif; ?>
						<div id="content">
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class="post">
									<h2 class="page-header post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

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
				<?php if ($is_sidebar) : ?>					
					</div><!-- /.col-md-8 -->
					
					<div id="sidebar" class="col-md-3">
					
						<?php dynamic_sidebar( 'sidebar' ); ?>
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
				<?php endif; ?>
			</div><!-- /.container -->
		</div><!-- /#main -->
        
<?php get_footer(); ?>