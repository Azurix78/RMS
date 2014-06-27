<!DOCTYPE html>
<!--[if lt IE 8]>
	<html class="ie8">
<![endif]-->
<html>
	<head>
		<title>Réussir Moi Aussi - <?php echo $this->fetch('title');?></title>
		<meta name="author" content="Ambroise Christea; Rémy Mulet; Nicolas Rivière; Nicolas Rubio">
		<meta charset="utf-8" />
		<meta name="description" content="Coaching &amp; insertion avec Réussir Moi Aussi : programme d'aide à la scolarité, à l'orientation et à l'insertion professionnelle">
		<meta name="keywords" content="coaching scolaire, coaching d’étudiant, orientation scolaire, conseil d orientation,orientation professionnelle, Test d’orientation, orientation après le bac, conseiller d’orientation,orientation après la 3eme,centre d’orientation, test orientation professionnelle, orientation lycée, orientation études, orientation professionnel, orientation après la seconde, orientation universitaire, choisir orientation, bilan d’orientation, aide orientation, centre d’information et d’orientation, choisir un métier, accompagnement scolaire, iece, difficultés scolaire, orientation métier, orientation après la troisième, échec scolaire, bilan de compétence étudiant, coaching individuel, coaching personnel">
		<meta name="copyright" content="www.iece.info">
		<?php
		echo $this->Html->meta(
		    'favicon.ico',
		    'img/favicon.ico',
		    array('type' => 'icon')
		);
			echo $this->Html->css('slick');
			echo $this->Html->css('style');
			echo $this->Html->script('jQuery-v1.11.1');
		?>
		<!--[if lt IE 8]>
			<script type="text/javascript" src="/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="header">
			<section id="logo-site">
				<a href="/home/"><img alt="logo" src="/img/logo-site.png" /></a>
			</section>
			<nav>
				<ul class="navigation-site">
					<li>
						<a href="/nous-aider" class="help-us-link"><span class="btn">Nous aider</span></a>
					</li>
					<li>
						<a href="/contact" <?php if($this->params['controller'] == "contact"){ echo 'class="active"'; } ?>><span>Contact</span></a>
					</li>
					<li>
						<a href="/medias" <?php if($this->params['controller'] == "medias"){ echo 'class="active"'; } ?>><span>Médias</span></a>
					</li>
					<li>
						<a href="/nos-partenaires" <?php if($this->params['controller'] == "partners"){ echo 'class="active"'; } ?>><span>Nos partenaires</span></a>
					</li>
					<li>
						<a href="/nos-intervenants" <?php if($this->params['controller'] == "teams"){ echo 'class="active"'; } ?>><span>Nos intervenants</span></a>
					</li>
					<li>
						<a href="/nos-actions" <?php if($this->params['action'] == "actions"){ echo 'class="active"'; } ?>><span>Nos actions</span></a>
					</li>
					<li>
						<a href="/coaching" <?php if($this->params['action'] == "coaching"){ echo 'class="active"'; } ?>><span>Le coaching</span></a>
						</li>
					<li>
						<a href="/actualites" <?php if($this->params['controller'] == "news"){ echo 'class="active"'; } ?>><span>Actualités</span></a>
					</li>
					<li>
						<a href="/accueil" <?php if($this->params['controller'] == "home" && ( $this->params['action'] == "" || $this->params['action'] == "index")){ echo 'class="active"'; } ?>><span>Accueil</span></a>
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
				<section class="container">
					<p>© 2014 - <b>Réussir Moi Aussi</b> - Tous droits reservés <em>Site réalisé par des étudiants de la <a href="http://webacademie.org">Web@cadémie</a>.</em></p>
				</section>
		</footer>
		
		
		<?php
			echo $this->Html->script('slick.min');
			echo $this->Html->script('js');
		?>
	</body>
</html>