<?php

echo $this->Form->create('Program');
	echo $this->Form->input('program_name', array('label' => 'Titre du programme :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->textarea('program_content', array());
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ProgramProgramContent' );
</script>