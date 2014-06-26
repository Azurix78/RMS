
<section class="descTeam">
	<h3>A propos de l'équipe Réussir Moi Aussi</h3>
	<?php echo $params['Param']['param_team_desc']; ?>
</section>

<h3>Nos coachs</h3>
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
<section class="coachs">
	<?php foreach ($teams as $key => $team): ?>
		<section class="membre">
			<div class="imgTeam">
				<img src="/files/images/teams/<?php echo $team['Team']['team_img']; ?>" alt="photo <?php echo $team['Team']['team_name']; ?>">
			</div>
			<h4><?php echo $team['Team']['team_name']; ?></h4>
			<p>
				<?php echo $team['Team']['team_desc']; ?>
			</p>
			<a href="#" class="plusMember">Voir plus</a>
		</section>
	<?php endforeach ?>
</section>

<script type="text/javascript">
	$('.plusMember').click(function(){
		$('.viewTeam .container-team > div h2').html($(this).parent().children('h4').html());
		$('.viewTeam .container-team > div p').html($(this).parent().children('p').html());
		$('.viewTeam .container-team > div img').attr('src',$(this).parent().children('div').children().attr('src'));
		$('.viewTeam').fadeIn();
	});

	$('.closeTeam').click(function(){
		$('.viewTeam').fadeOut();
	});
</script>