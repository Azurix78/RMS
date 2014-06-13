<?php

echo $this->Form->create('Program');
	echo $this->Form->input('program_name', array('label' => 'Titre du programme :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->textarea('program_content', array());
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'programs', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ProgramProgramContent' );
</script>