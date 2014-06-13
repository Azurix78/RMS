<?php $this->set('title_for_layout', "Ajout d'un intervenant"); ?>

<?php echo $this->Form->create('Team', array('type' => 'file'));
	echo $this->Form->input('team_name', array('label' => 'Nom de l\'intervenant', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Exemple : John Doe"));
	echo $this->Form->input('team_desc', array('label' => 'Description du l\'intervenant :', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Description"));
	echo $this->Form->input('team_img', array('label' => 'Photo de l\'intervenant', 'type' => 'file'));
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));
echo $this->Form->end(); ?>
