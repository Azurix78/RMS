<h3>L'actualité :</h3>
<section class="articles">
	<?php foreach($news as $key => $news){?>
		<article class="leftA">
			<section class="leftArticle">
				<img src="/files/images/news/<?php echo $news['News']['news_img']; ?>" alt="<?php echo $news['News']['news_title']; ?>">
			</section>
			<section class="rightArticle">
				<h4><?php echo $news['News']['news_title']; ?></h4>
				<div>
					<?php echo $news['News']['news_summary']; ?>
				</div>
				<a href="/news/view/<?php echo $news['News']['news_id']; ?>">
					<span class="plus">Lire la suite</span>
				</a>
				<?php 
					echo $this->Html->link('<span class="plus">Lire la suite</span>', '/actualites/' . $news['News']['news_id'] . '-' .  $news['News']['slug'], array('escape' => false));
				?>
			</section>
		</article>
	<?php } ?>
</section>
