<?php

echo $this->Form->create('News', array('type' => 'file'));
	echo $this->Form->input('news_title', array('label' => 'Titre de la news :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->textarea('news_content', array());
	echo $this->Form->input('news_img', array('type' => 'file', 'label' => 'Image de la news :', 'class' => 'form-control'));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'news', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'NewsNewsContent' );
</script>