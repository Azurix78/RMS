<div class="reports article">
	<h1><?php echo $reports['Report']['report_name']; ?></h1>
	<div class="report_content">
		<?php echo $reports['Report']['report_content']; ?>
	</div>
	<?php
	echo $this->Html->link('<span class="plus back">Retour</span>', '/nos-actions/' . $prog['Program']['program_id'] . '-' .  $prog['Program']['slug'], array('escape' => false));
	 ?>
</div>
	