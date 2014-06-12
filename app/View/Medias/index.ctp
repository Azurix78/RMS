<h3>Ils parlent de nous</h3>
<section class="articles">
	<?php foreach($dataMedia as $key => $media){?>
		<article class="<?php if($key%2 == 0){ echo 'leftA'; } else { echo 'rightA'; } ?>">
			<section class="leftArticle">
				<img src="<?php echo $media['Media']['media_img']; ?>" alt="<?php echo $media['Media']['media_name']; ?>">
			</section>
			<section class="rightArticle">
				<h4><?php echo $media['Media']['media_name']; ?></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a lectus elementum, dignissim sapien id, consectetur massa. Nulla auctor sapien ut quam blandit mattis. Fusce tempus, metus a ultricies mollis, leo purus egestas nulla, vitae adipiscing quam lectus quis tellus. Cras id sapien id libero viverra porttitor at sagittis nisl. Maecenas laoreet mollis enim, at tempus eros cursus ac. Nulla scelerisque fringilla leo quis consectetur. Phasellus id dapibus mauris, aliquet faucibus sapien. Proin ullamcorper lorem quam, id commodo lacus ornare non. Aenean vitae erat porta, aliquam est in, ultricies odio.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a lectus elementum, dignissim sapien id, consectetur massa. Nulla auctor sapien ut quam blandit mattis. Fusce tempus, metus a ultricies mollis.</p>
				<a href="<?php echo $media['Media']['media_link']; ?>">
					<span class="plus">Lire la suite</span>
				</a>
			</section>
		</article>
	<?php } ?>
</section>