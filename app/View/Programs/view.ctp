<section class="left-nav">
	<ul>
		<li>Liste des programme</li>
		<?php foreach ($programs as $key => $program): ?>
			
				<?php 
				if($id == $program['Program']['program_id'])
				{ ?>
					<li class="activ">
					<?php echo $this->Html->link('<span>' . $program['Program']['program_name'] . '</span>', '/nos-actions/' . $program['Program']['program_id'] . '-' .  $program['Program']['slug'], array('escape' => false)); ?>
					</li>
				<?php }
				else
				{ ?>
					<li>
					<?php echo $this->Html->link('<span>' . $program['Program']['program_name'] . '</span>', '/nos-actions/' . $program['Program']['program_id'] . '-' .  $program['Program']['slug'], array('escape' => false)); ?>
					</li>
				<?php }
				?>

		<?php endforeach ?>
	</ul>
</section>
<section class="actions-content-container">
	<section class="actions-programmes-desc">
		<article>
			<h2>
				<span><?php echo $prog['Program']['program_name']; ?></span>
			</h2>
			<?php echo $prog['Program']['program_content']; ?>
			<?php if (count($reports)>0): ?>
				<section class="program-report">
					<h2>Compte(s) rendu(s):</h2>
					<?php foreach ($reports as $key => $report): ?>
						<?php 
							echo $this->Html->link('<span>' . $report['Report']['report_name'] . '</span>', '/nos-actions/compte-rendu/' . $report['Report']['report_id'] . '-' .  $report['Report']['slug'], array('escape' => false));
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