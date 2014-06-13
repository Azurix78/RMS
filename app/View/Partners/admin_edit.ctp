<?php $this->set('title_for_layout', "Modification d'un partenaire"); ?>

<?php echo $this->Form->create('Partner', array('type' => 'file'));
	echo $this->Form->input('partner_name', array('label' => 'Nom du partenaire :', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Contenu"));
	echo $this->Form->input('partner_desc', array('label' => 'Description du partenaire :', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Description"));
	echo $this->Form->input('partner_img', array('label' => 'Image/Logo du partenaire :', 'type' => 'file', 'class' => 'form-control'));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'partners', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end(); ?>