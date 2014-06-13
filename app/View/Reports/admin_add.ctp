<?php

echo $this->Form->create('Report');
	echo $this->Form->input('report_name', array('label' => 'Titre du compte rendu :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('report_content');
	echo $this->Form->input('report_date', array('label' => 'Date de création du compte rendu', 'type' => 'date'));
	echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'reports', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ReportReportContent' );
</script>