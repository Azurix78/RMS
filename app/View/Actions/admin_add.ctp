<?php

echo $this->Form->create('Action');
	echo $this->Form->input('action_title', array('label' => 'Titre de l\'action :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('action_content');
	echo $this->Form->input('action_date_created', array('label' => 'Date de création de l\'action', 'type' => 'date'));
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ActionActionContent' );
</script>