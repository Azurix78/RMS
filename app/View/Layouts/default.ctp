<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->fetch('title');?></title>
		<meta name="author" content="rubio_n">
		<meta charset="utf-8" />
		<link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
		<?php
			echo $this->Html->css('slick');
			echo $this->Html->css('style');
		?>
	</head>
	<body>
		<header class="header">
			<section id="logo-site">
				<a href="/"><img alt="logo" src="/img/logo-site.png" /></a>
			</section>
			<nav>
				<ul class="navigation-site">
					<li><a href="/home/help" class="help-us-link"><span class="btn">Nous aider</span></a></li>
					<li><a href="/home/contact"><span>Contact</span></a></li>
					<li><a href="/home/partners"><span>Nos partenaires</span></a></li>
					<li><a href="/home/coachs"><span>Notre équipe</span></a></li>
					<li><a href="/home/actions"><span>Les programmes</span></a></li>
					<li><a href="#"><span>Le coaching</span></a></li>
					<li><a href="#"><span>Les actualités</span></a></li>
					<li><a class="active" href="/"><span>Acceuil</span></a></li>
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