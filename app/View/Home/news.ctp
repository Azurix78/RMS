<h3>Nos Actualités</h3>
<section class="articles">
<?php foreach ($news as $key => $new): ?>
	<article class="NewsArticle">
		<h4><?php echo $new['News']['news_title']; ?></h4>
		<div class="news-content">
			<?php echo $new['News']['news_content'] ?>
		</div>
		<span class="plus">Lire la suite</span>
	</article>
<?php endforeach ?>
</section>