<?php $this->set('title_for_layout', "Ajout d'un partenaire"); ?>

<?php echo $this->Form->create('Partner', array('type' => 'file'));
	echo $this->Form->input('partner_name', array('label' => 'Nom du partenaire :', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "exemple : Ile de france"));
	echo $this->Form->input('partner_desc', array('label' => 'Description du partenaire :', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Description"));
	echo $this->Form->input('partner_img', array('label' => 'Image/Logo du partenaire :', 'type' => 'file', 'class' => 'form-control'));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));
echo $this->Form->end(); ?>
