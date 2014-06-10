<section class="descTeam">
	<h3>A propos de l'équipe Réussir Moi Aussi</h3>
	<?php echo $params['Param']['param_team_desc']; ?>
</section>

<h3>Nos coachs</h3>
<section class="coachs">
	<?php foreach ($teams as $key => $team): ?>
		<section class="membre">
			<img src="/img/membre.png" alt="photo <?php echo $team['Team']['team_name']; ?>">
			<h4><?php echo $team['Team']['team_name']; ?></h4>
			<p>
				<?php echo $team['Team']['team_desc']; ?>
			</p>
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