<?php

echo $this->Form->create('Media', array('type' => 'file'));
	echo $this->Form->input('media_name', array('label' => 'Titre de la news :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('media_desc', array('label' => 'Contenu de la news :', 'type' => 'textarea', 'placeholder' => 'Texte...'));
	echo $this->Form->input('media_link', array('label' => 'Lien vers l\'article :','type' => 'text', 'class' => 'form-control', 'placeholder' => 'Lien vers l\'article'));
	echo $this->Form->input('media_img', array('label' => 'Image du média :', 'class' => 'form-control', 'type' => 'file'));
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'medias', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end(); ?>

<script>
	CKEDITOR.replace( 'MediaMediaDesc' );
</script>