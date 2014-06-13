<?php

echo $this->Form->create('Slider', array('type' => 'file'));
	echo $this->Form->input('slider_name', array('label' => 'Titre du compte rendu :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('slider_desc');
	echo $this->Form->input('slider_img', array('label' => 'Image du slider', 'type' => 'file'));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'SliderSliderDesc' );
</script>