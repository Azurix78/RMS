<?php $this->set('title_for_layout', "Modification d'un partenaire"); ?>

<?php echo $this->Form->create('Partner');
	echo $this->Form->input('partner_name', array('label' => 'Nom du partenaire :', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Contenu"));
	echo $this->Form->input('partner_desc', array('label' => 'Description du partenaire :', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Description"));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));
echo $this->Form->end(); ?>