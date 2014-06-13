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
				<a href="/home/"><img alt="logo" src="/img/logo-site.png" /></a>
			</section>
			<nav>
				<ul class="navigation-site">
					<li>
						<a href="/help" class="help-us-link"><span class="btn">Nous aider</span></a>
					</li>
					<li>
						<a href="/contact" <?php if($this->params['controller'] == "contact"){ echo 'class="active"'; } ?>><span>Contact</span></a>
					</li>
					<li>
						<a href="/medias" <?php if($this->params['controller'] == "medias"){ echo 'class="active"'; } ?>><span>Presse</span></a>
					</li>
					<li>
						<a href="/partners" <?php if($this->params['controller'] == "partners"){ echo 'class="active"'; } ?>><span>Nos partenaires</span></a>
					</li>
					<li>
						<a href="/teams" <?php if($this->params['controller'] == "teams"){ echo 'class="active"'; } ?>><span>Notre équipe</span></a>
					</li>
					<li>
						<a href="/programs/" <?php if($this->params['action'] == "actions"){ echo 'class="active"'; } ?>><span>Les programmes</span></a>
					</li>
					<li>
						<a href="/home/coaching" <?php if($this->params['action'] == "coaching"){ echo 'class="active"'; } ?>><span>Le coaching</span></a>
						</li>
					<li>
						<a href="/news" <?php if($this->params['controller'] == "news"){ echo 'class="active"'; } ?>><span>Les actualités</span></a>
					</li>
					<li>
						<a href="/home/" <?php if($this->params['controller'] == "home" && ( $this->params['action'] == "" || $this->params['action'] == "index")){ echo 'class="active"'; } ?>><span>Accueil</span></a>
					</li>
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