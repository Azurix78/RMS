<?php

echo $this->Form->create('News');
	echo $this->Form->input('news_title', array('label' => 'Titre de la news :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->textarea('news_content', array('label' => 'Contenu de la news :', 'placeholder' => 'Texte...'));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'NewsNewsContent' );
</script>