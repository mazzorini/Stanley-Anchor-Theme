<?php theme_include('partials/header'); ?>

<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2">
                <p><img src="<?php echo theme_url('assets/img/user.png'); ?>" width="50px" height="50px"> <ba><?php echo article_author(); ?></ba></p>
				<h3><?php echo article_title(); ?></h3>
				<hr>
                <div class="resp">
				<p><?php echo article_markdown(); ?></p>
                </div>
			</div>
		</div><!-- /row -->
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<p><bt>Author: <a><?php echo article_author(); ?></a></bt> - <bt>Type: <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a></bt> - <bt>Date: <a><?php echo article_date(); ?></a></bt></p>
                <hr>
					<p><a href="#" onclick="goBack()"># Back</a></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

<script>
function goBack()
  {
  window.history.back()
  }
</script>

<?php theme_include('partials/footer'); ?>