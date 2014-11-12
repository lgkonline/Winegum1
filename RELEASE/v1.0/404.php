<?php get_header(); ?>

		<div id="main">
			<div id="main-container" class="container">
				<div class="row">
					<div class="col-md-9">
						<div id="content">
							<div class="alert alert-warning">
								<h2>404 - Not found</h2>
								
								<p>
									This page doesn't exist.
								</p>
							</div>
						</div><!-- /.content -->						
					</div><!-- /.col-md-8 -->
					
					<div id="sidebar" class="col-md-3">
						<?php dynamic_sidebar( 'sidebar' ); ?>
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#main -->
        
<?php get_footer(); ?>

<script>
	$(document).ready(function() {
		search_toggle();
	});
</script>