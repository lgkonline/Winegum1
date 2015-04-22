		<div id="footer">
      		<?php if (is_active_sidebar('footer-text')) : ?>
       		<div id="footer-widgets">
       			<div class="container">
       				<?php dynamic_sidebar( 'footer-text' ); ?>
       			</div>
       		</div>
       		<?php endif; ?>
       	
        	<div class="container">
       			<div class="clearfix"></div>
       			
       			<div class="row">
       				<div class="col-md-6">
       					<p>
						<?php
							$options = get_option('kb_theme_options');
							echo $options['copyright'];
						?>       						
       					</p>
       				</div>
       				
       				<div class="col-md-6">
						<p id="copyright-line">
							<a href="http://lgk.io" target="_blank">Theme by LGK</a>
						</p>       					
       				</div>
       			</div>
        	</div>
        </div><!-- /#footer -->
        
        <?php wp_footer(); ?>
         
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
        <script src="<?php bloginfo('template_url'); ?>/lib/stellar.js/jquery.stellar.min.js"></script>        
        <script src="<?php bloginfo('template_url'); ?>/script.js"></script>          
    </body>
</html>