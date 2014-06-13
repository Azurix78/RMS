<?php

echo $this->Form->create('Slider', array('type' => 'file'));
	echo $this->Form->input('slider_name', array('label' => 'Titre du compte rendu :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('slider_desc', array('label' => 'Message', 'type' => 'textarea', 'class' => 'form-control'));
	echo $this->Form->input('slider_img', array('label' => 'Image du slider', 'type' => 'file'));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));

echo $this->Form->end();

?>