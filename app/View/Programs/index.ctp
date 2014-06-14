<section class="left-nav">
	<ul>
		<li>Liste des programmes</li>
		<?php foreach ($programs as $key => $program): ?>
			<li>
				<?php 
					echo $this->Html->link('<span>' . $program['Program']['program_name'] . '</span>', array('controller' => 'programs', 'action' => 'view', $program['Program']['program_id'], 'admin' => false),array('escape' => false));
				?>
			</li>
		<?php endforeach ?>
	</ul>
</section>
<section class="actions-content-container">
	<section class="actions-programmes-desc">
		<p>
			Choisissez un programme.
		</p>
	</section>
</section>