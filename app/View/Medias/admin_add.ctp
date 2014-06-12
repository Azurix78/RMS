<?php

echo $this->Form->create('Media');
	echo $this->Form->input('media_name', array('label' => 'Titre de la news :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('media_desc', array('label' => 'Contenu de la news :', 'type' => 'textarea', 'placeholder' => 'Texte...'));
	echo $this->Form->input('media_link', array('label' => 'Lien vers l\'article :','type' => 'text', 'class' => 'form-control', 'placeholder' => 'Lien vers l\'article'));
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
echo $this->Form->end(); ?>

<script>
	CKEDITOR.replace( 'MediaMediaDesc' );
</script>