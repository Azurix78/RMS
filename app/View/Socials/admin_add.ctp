<?php $this->set('title_for_layout', "Ajout d'un lien vers un réseau social"); ?>

<?php echo $this->Form->create('Social', array('type' => 'file'));
	echo $this->Form->input('social_name', array('label' => 'Nom de l\'intervenant', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Exemple : Facebook"));
	echo $this->Form->input('social_link', array('label' => 'Lien vers la page/le site :', 'type' => 'text', 'class' => 'form-control', 'placeholder' => "Lien"));
	echo $this->Form->input('social_img', array('label' => 'Image pour le lien', 'type' => 'file'));
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));
echo $this->Form->end(); ?>
