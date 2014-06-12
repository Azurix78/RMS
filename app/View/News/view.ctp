<section class="articles">
		<article class="leftA">
			<section >
				<h4><?php echo $news['News']['news_title']; ?></h4>
				<div>
					<?php echo $news['News']['news_content']; ?>
				</div>
				<a href="/news/view/<?php echo $news['News']['news_id']; ?>">
					<span class="plus">Lire la suite</span>
				</a>
			</section>
		</article>
</section>
