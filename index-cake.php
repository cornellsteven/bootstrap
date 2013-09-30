<?php

$title = isset($title_for_layout) ? $title_for_layout : 'Untitled';

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 oldie"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 oldie"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php echo $this->fetch('css'); ?>
		
		<?php echo $this->Html->css('/stylesheets/css/styles.css'); ?>
		
		<?php echo $this->Html->script('libs/modernizr-2.6.2.min.js', true); ?>
		
		<?php echo $this->Html->meta('icon'); ?>
		
		<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><i class="icon-twitter"></i> Project name</a>
				</div><!-- /navbar-header -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
						<li><a href="#about"><i class="icon-bolt"></i> About</a></li>
						<li><a href="#contact"><i class="icon-envelope-alt"></i> Contact</a></li>
					</ul>
				</div><!-- /nav-collapse -->
			</div><!-- /container -->
		</div><!-- /navbar -->

		<div class="container">
			<div class="starter-template">
				
				<?php echo $this->Session->flash(); ?>
				
				<h1>Bootstrap starter template</h1>
				<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
				
				<?php echo $this->fetch('content'); ?>
				
			</div>
		</div><!-- /container -->
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script>window.jQuery || document.write("<script src='<?php echo $this->Html->url('/js/libs/jquery-1.9.1.min.js'); ?>'>\x3C/script>")</script>
		<script>var URL = '<?php echo $this->Html->url('/'); ?>';</script>
		
		<?php echo $this->Html->script('js/plugins.js'); ?>
		
		<?php echo $this->Html->script('js/libs/bootstrap.min.js'); ?>
		
		<?php echo $this->Html->script('js/main.js'); ?>
		
		<?php echo $this->fetch('script'); ?>
		
	</body>
</html>