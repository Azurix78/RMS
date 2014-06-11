<?php $this->set('title_for_layout', "Edition de la page Nous aider"); ?>
<blockquote class="small"><p>Vous pouvez changer ici les descriptions de la page "Nous aider".<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"</p></blockquote>
<?php echo $this->Form->create('Help'); ?>
	<?php echo $this->Form->input('help_content1', array('label' => 'Vous souhaitez devenir bénévole ?', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => ""));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
<div style="clear:both"></div>
<hr>
<?php echo $this->Form->create('Help'); ?>
<?php echo $this->Form->create('Help'); ?>
	<?php echo $this->Form->input('help_content2', array('label' => 'Vous souhaitez nous aider financièrement ?', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => ""));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
<div style="clear:both"></div>
<hr>
<?php echo $this->Form->create('Help'); ?>
<?php echo $this->Form->create('Help'); ?>
	<?php echo $this->Form->input('help_content3', array('label' => 'Vous êtes une entreprise et vous souhaitez financer nos programmes ?', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => ""));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>

<script>
	CKEDITOR.replace( 'HelpHelpContent1' );
	CKEDITOR.replace( 'HelpHelpContent2' );
	CKEDITOR.replace( 'HelpHelpContent3' );
</script>