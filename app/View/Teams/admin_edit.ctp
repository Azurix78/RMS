<?php $this->set('title_for_layout', "Edition d'un intervenant"); ?>

<?php echo $this->Form->create('Team');
	echo $this->Form->input('team_name', array('label' => 'Nom de l\'intervenant', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Contenu"));
	echo $this->Form->input('team_desc', array('label' => 'Description du l\'intervenant :', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Description"));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));
echo $this->Form->end(); ?>