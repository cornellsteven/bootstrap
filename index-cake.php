<?php

$title = $title_for_layout;

?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<title><?php echo $title; ?></title>
		
		<?php // echo $this->Html->meta('description', 'Description'); ?>
		<?php // echo $this->Html->meta('keywords', 'Keywords'); ?>
		<?php // echo $this->Html->meta('author', 'Author Name - Author url'); ?>
		
		<link rel="stylesheet/less" type="text/css" href="<?php echo $this->Html->url('/stylesheets/less/styles.less') ?>" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.3.3/less.min.js"></script>
		<script>window.less || document.write("<script src='<?php echo $this->Html->url('libs/less-1.3.3.min.js'); ?>'>\x3C/script>")</script>
		<script>window.less || document.write('<?php echo $this->Html->css('/stylesheets/css/styles.css'); ?>')</script>
		
		<?php echo $this->Html->meta('icon'); ?>
		
		<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<?php echo $this->Html->script('libs/modernizr-2.6.2.min.js', true); ?>
	</head>

	<body>

		<div id="container">
			
			<div class="container">
				<div class="row">
					
					<div class="span12">
						<div id="main" role="main">
							
							<?php echo $this->Session->flash(); ?>
							
							<?php echo $this->fetch('content'); ?>
							
						</div><!-- /main -->
					</div><!-- /span12 -->
					
				</div><!-- /row -->
			</div><!-- /container -->
			
		</div><!-- /#container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script>window.jQuery || document.write("<script src='<?php echo $this->Html->url('/js/libs/jquery-1.9.1.min.js'); ?>'>\x3C/script>")</script>
		<script>var URL = '<?php echo $this->Html->url('/'); ?>';</script>

		<?php echo $this->Html->script('js/plugins.js'); ?>
		
		<?php echo $this->Html->script('js/main.js'); ?>
		
		<?php echo $this->fetch('script'); ?>
		
	</body>
</html>