<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->fetch('title');?></title>
		<meta name="author" content="rubio_n">
		<meta charset="utf-8" />
		<link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
		<?php
			echo $this->Html->css('style');
		?>
	</head>
	<body>
		<header class="header">
			<section id="logo-site">
				<img alt="logo" src="/img/logo-site.png" />
			</section>
			<nav>
				<ul class="navigation-site">
					<li><a href="#" class="help-us-link"><span>Link</span></a></li>
					<li><a href="#"><span>Link</span></a></li>
					<li><a href="#"><span>Link</span></a></li>
					<li><a href="#"><span>Link</span></a></li>
					<li><a href="#"><span>Link</span></a></li>
					<li><a href="#"><span>Link</span></a></li>
					<li><a href="#"><span>Link</span></a></li><li><a class="active" href="#"><span>Link</span></a></li>
				</ul>
			</nav>
		</header>
		<section class="container">
			<section class="alert">
				<?php echo $this->Session->flash(); ?>
			</section>
			<section class="content">
				<?php echo $this->fetch('content'); ?>
			</section>
		</section>
		<footer class="footer">
				
		</footer>
		
		
		<?php
			echo $this->Html->script('jQuery-v1.11.1');
			echo $this->Html->script('slick.min');
			echo $this->Html->script('js');
		?>
	</body>
</html>