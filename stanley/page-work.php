<?php theme_include('partials/header'); ?>
	
<!-- +++++ Projects Section +++++ -->
    <div class="container pt">
        <div class="row mt centered">
            <?php $allowCat = array(site_meta('cat_work')); ?>							
                                
                <?php while(custom_posts_page()): ?>                          
                    <?php foreach($allowCat as $cat): ?>
                        <?php if(article_category_id() == $cat): ?>
                        <div class="col-lg-4">
                            <a class="zoom green" href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('img_work'); ?>"></a>
                            <p><?php echo article_title(); ?></p>
                        </div><!-- /col-lg-4 -->
                        <?php endif; ?> 
                    <?php endforeach; ?>
                <?php endwhile; ?>
        </div><!-- /row -->			
    </div><!-- /container -->

<?php theme_include('partials/footer'); ?>