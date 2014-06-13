<?php $this->set('title_for_layout', "Ajout d'un lien vers un réseau social"); ?>

<?php echo $this->Form->create('Social', array('type' => 'file'));
	echo $this->Form->input('social_name', array('label' => 'Nom de réseau social', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Exemple : Facebook"));
	echo $this->Form->input('social_link', array('label' => 'Lien vers la page/le site :', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Lien"));
	echo $this->Form->input('social_img', array('label' => 'Image pour le lien', 'type' => 'file'));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'admin', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end(); ?>
