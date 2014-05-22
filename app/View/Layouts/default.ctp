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
		<section class="container">
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
			<section id="content-container">
				<section class="alert">
					<?php echo $this->Session->flash(); ?>
				</section>
				<section class="content">
					<?php echo $this->fetch('content'); ?>
				</section>
			</section>
			<footer>
				<div class="container">
					<div class="column">
						<h3>Réseaux sociaux :</h3>
						<a href="https://plus.google.com/u/0/116029246884386023362/about"><img src="/img/logo-gp.png" alt="logo-gp" /></a>
						<a href="https://twitter.com/ni_rubio"><img src="/img/logo-twitter.png" alt="logo-twitter" /></a>
					</div>
					<div class="column">
						<h3>A propos :</h3>
						<p>Je suis <strong>Nicolas RUBIO</strong>, développeur web, actuelement étudiant à la Web@cademie.</p>
					</div>
					<div id="copyright">
						&copy; Nicolas Rubio 2013
					</div>
				</div>
			</footer>
		</section>
		
		
		<?php
			echo $this->Html->script('jQuery_v2.0.3');
			echo $this->Html->script('js');
		?>
	</body>
</html>