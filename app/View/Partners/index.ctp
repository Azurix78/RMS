<section style="display:none" class="viewTeam">
	<div class="container-team">
		<div>
			<span class="closeTeam">Fermer</span>
			<img src="" alt="">
			<h2></h2>
			<p></p>
		</div>
	</div>
</section>
<h3>Nos institutions partenaires, mécènes et soutiens</h3>
<section class="ctnPartners">
	<?php foreach ($partnersTop as $key => $partner): ?>
		<section>
			<div class="imgPartner">
				<img src="/files/images/partners/<?php echo $partner['Partner']['partner_img']; ?>" alt="<?php echo $partner['Partner']['partner_name']; ?>">
			</div>
			<h4><?php echo $partner['Partner']['partner_name']; ?></h4>
			<p><?php echo $partner['Partner']['partner_desc']; ?></p>
			<a href="#" class="plus">Voir plus</a>
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
</section>
<script type="text/javascript">
	$('.plus').click(function(){
		$('.viewTeam .container-team > div h2').html($(this).parent().children('h4').html());
		$('.viewTeam .container-team > div p').html($(this).parent().children('p').html());
		$('.viewTeam .container-team > div img').attr('src',$(this).parent().children('div').children().attr('src'));
		$('.viewTeam').fadeIn();
	});

	$('.closeTeam').click(function(){
		$('.viewTeam').fadeOut();
	});
</script>