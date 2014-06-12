<?php

echo $this->Form->create('Report');
	echo $this->Form->input('report_name', array('label' => 'Titre du compte rendu :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->input('report_content');
	echo $this->Form->input('report_date', array('label' => 'Date de création du compte rendu', 'type' => 'date'));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ReportReportContent' );
</script>