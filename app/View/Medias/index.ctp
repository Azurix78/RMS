<h3>Ils parlent de nous</h3>
<section class="articles">
	<?php foreach($dataMedia as $key => $media){?>
		<article class="<?php if($key%2 == 0){ echo 'leftA'; } else { echo 'rightA'; } ?>">
			<section class="leftArticle">
				<img src="<?php echo $media['Media']['media_img']; ?>" alt="<?php echo $media['Media']['media_name']; ?>">
			</section>
			<section class="rightArticle">
				<h4><?php echo $media['Media']['media_name']; ?></h4>
				<div>
					<?php echo $media['Media']['media_desc']; ?>
				</div>
				<a href="<?php echo $media['Media']['media_link']; ?>">
					<span class="plus">Lire la suite</span>
				</a>
			</section>
		</article>
	<?php } ?>
</section>