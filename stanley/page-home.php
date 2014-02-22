<?php theme_include('partials/header'); ?>

<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="<?php echo theme_url('assets/img/user.png'); ?>" alt="Stanley">					
					<p><?php echo page_content(); ?></p>
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt centered">
            <?php while(rwar_latest_posts()): ?>
                <div class="col-lg-4">
                        <a class="zoom green" href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('img_work'); ?>"></a>
				        <p><?php echo article_title(); ?></p>
                </div>
            <?php endwhile; ?>        
		</div><!-- /row -->
	</div><!-- /container -->

<?php theme_include('partials/footer'); ?>