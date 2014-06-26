<section class="left-nav">
	<ul>
		<li>Liste des programme</li>
		<?php foreach ($programs as $key => $program): ?>
			<li>
				<?php 
					echo $this->Html->link('<span>' . $program['Program']['program_name'] . '</span>', '/nos-actions/' . $program['Program']['program_id'] . '-' .  $program['Program']['slug'], array('escape' => false));
				?>
			</li>
		<?php endforeach ?>
	</ul>
</section>
<section class="actions-content-container">
	<section class="actions-programmes-desc">
		<article>
			<h2>
				<span><?php echo $programs[0]['Program']['program_name']; ?></span>
			</h2>
			<?php echo $programs[0]['Program']['program_content']; ?>
			<?php if (count($reports)>0): ?>
				<section class="program-report">
					<h2>Compte(s) rendu(s):</h2>
					<?php foreach ($reports as $key => $report): ?>
						<?php
							echo $this->Html->link($report['Report']['report_date'] . ' - ' . $report['Report']['report_name'], array('controller' => 'reports', 'action' => 'view', $report['Report']['report_id'], 'admin' => false, 'escape' => false));
						?>
					<?php endforeach ?>
				</section>
			<?php endif ?>
		</article>
	</section>
	<section class="actions-action-container">
		<?php foreach ($actions as $key => $action): ?>
			<section class="actions-action">
				<span class="actions-action-date">
					<span><?php echo substr($action['Action']['action_date_created'], 5, 2); ?></span>
					<span>/</span>
					<span><?php echo substr($action['Action']['action_date_created'], 0, 4); ?></span>
				</span>
				<article>
					<?php echo $action['Action']['action_content']; ?>
				</article>
			</section>
		<?php endforeach ?>
	</section>
</section>