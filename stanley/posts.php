<?php theme_include('partials/header'); ?>

<!-- +++++ Posts Lists +++++ -->	
<?php if(has_posts()): ?>    
<!-- We have posts, it's safe to loop. -->
    <?php $i = 0; while(posts()): $i++; ?>
	<div id="bg<?php echo $i % 2; ?>"> 
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">                
                    <p><img src="<?php echo theme_url('assets/img/user.png'); ?>" width="50px" height="50px"> <ba><?php echo article_author(); ?></ba></p>
                    <p><bd><?php echo article_date(); ?></bd></p>
                    <h4><?php echo article_title(); ?></h4>
                    <p><?php echo article_description(); ?></p>
                    <p><a href="<?php echo article_url(); ?>">Continue Reading...</a></p>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
     </div><!-- /#bg -->
    <?php endwhile; ?>

<?php if(has_pagination()): ?>           
    <div id="grey">
        <div class="col-lg-8 col-lg-offset-2">
        <?php echo posts_prev('# Back'); ?>
        <?php echo posts_next('# Next'); ?>
        </div>
    </div><!-- /#grey -->
<?php endif; ?>
                
<?php else: ?>
    <div id="white">
        <div class="col-lg-8 col-lg-offset-2">
            <p>Looks like you have some writing to do!</p>
        </div>
    </div><!-- /#white -->
<?php endif; ?>     
<!-- +++++ Posts Lists +++++ -->	

<?php theme_include('partials/footer'); ?>