
<section class="descTeam">
	<h3>A propos de l'équipe Réussir Moi Aussi</h3>
	<?php echo $params['Param']['param_team_desc']; ?>
</section>

<h3>Nos coachs</h3>
<section style="display:none" class="viewTeam">
	<div>
		<span class="closeTeam"></span>
		<img src="" alt="">
		<h2></h2>
		<p></p>
	</div>
</section>
<section class="coachs">
	<?php foreach ($teams as $key => $team): ?>
		<section class="membre">
			<div class="imgTeam">
				<img src="<?php echo $team['Team']['team_img']; ?>" alt="photo <?php echo $team['Team']['team_name']; ?>">
			</div>
			<h4><?php echo $team['Team']['team_name']; ?></h4>
			<p>
				<?php echo $team['Team']['team_desc']; ?>
			</p>
			<a href="javacript:;" class="plusMember">Voir</a>
		</section>
	<?php endforeach ?>
	<!-- GABARIT -->
	<!--
	<section class="membre">
		<img src="/img/membre.png" alt="Nom Prénom">
		<h4>Nom prénom</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a lectus elementum, dignissim sapien id, consectetur massa. Nulla auctor sapien ut quam blandit mattis. Fusce tempus, metus a ultricies mollis, leo purus egestas nulla, vitae adipiscing 
	</section>
	-->
</section>

<script type="text/javascript">
	$('.plusMember').click(function(){
		$('.viewTeam div h2').html($(this).parent().children('h4').html());
		$('.viewTeam div p').html($(this).parent().children('p').html());
		$('.viewTeam div img').attr('src',$(this).parent().children('div').children().attr('src'));
		$('.viewTeam').fadeIn();
	});

	$('.closeTeam').click(function(){
		$('.viewTeam').fadeOut();
	});
</script>