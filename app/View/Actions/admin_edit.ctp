<?php

echo $this->Form->create('Action');
	echo $this->Form->input('action_title', array('label' => 'Titre de l\'action :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('action_content');
	echo $this->Form->input('action_date_created', array('label' => 'Date de l\'action :', 'class' => 'form-control', 'type' => 'date'));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ActionActionContent' );
</script>