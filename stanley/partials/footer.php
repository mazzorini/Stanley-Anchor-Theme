<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My Bunker</h4>
					<p><?php echo site_meta('address'); ?></p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
                    <?php if(site_meta('acc_dribbble') !=''): ?>   
						<a href="<?php echo dribbble_url(); ?>">Dribbble</a><br/>
                    <?php endif; ?>
                    <?php if(site_meta('acc_twitter') !=''): ?> 
						<a href="<?php echo twitter_url(); ?>">Twitter</a><br/>
                    <?php endif; ?>
                    <?php if(site_meta('acc_facebook') !=''): ?>
						<a href="<?php echo facebook_url(); ?>">Facebook</a>
                    <?php endif; ?>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>About <?php echo site_name(); ?></h4>
					<p><?php echo site_meta('about'); ?></p>
				</div><!-- /col-lg-4 -->
			
			</div><!-- /row -->
		
		</div><!-- /container -->
	</div><!-- /#footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo theme_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>