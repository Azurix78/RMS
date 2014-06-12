<h3>Nos institutions partenaires, mécènes et soutiens</h3>
<section class="ctnPartners">
	<?php foreach ($partnersTop as $key => $partner): ?>
		<section>
			<div class="imgPartner">
				<img src="/files/images/partners/<?php echo $partner['Partner']['partner_img']; ?>" alt="<?php echo $partner['Partner']['partner_name']; ?>">
			</div>
			<h4><?php echo $partner['Partner']['partner_name']; ?></h4>
			<p><?php echo $partner['Partner']['partner_desc']; ?></p>
		</section>
		<section>
			<img src="/img/partenaire.png" alt="Nom du partner">
			<h4>Nom du partnaire</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a lectus elementum, dignissim sapien id, consectetur massa. Nulla auctor sapien ut quam blandit mattis. Fusce tempus, metus a ultricies mollis, leo purus egestas nulla, vitae adipiscing quam lectus quis tellus. Cras id sapien id libero viverra porttitor at sagittis nisl. Maecenas laoreet mollis enim, at </p>
		</section>
	<?php endforeach ?>
</section>

<h3>Nos entreptises partenaires pour rapprocher les jeunes et l’entreprise</h3>
<section class="ctnPartners partnersSecond">
	<?php foreach ($partnersBot as $key => $partner): ?>
		<section>
			<img src="/files/images/partners/<?php echo $partner['Partner']['partner_img']; ?>" alt="<?php echo $partner['Partner']['partner_name']; ?>">
			<h5><?php echo $partner['Partner']['partner_name']; ?></h5>
		</section>
	<?php endforeach ?>
	<section>
		<img src="/img/partenaire.png" alt="Nom du partner">
		<h5>Nom du partnaire</h5>
	</section>
</section>
