<?php $this->set('title_for_layout', "Administration - Accueil"); ?>
<blockquote class="small">
	<p>
		Grâce à ce formulaire, vous pourrez modifier le contenu des informations de la rubrique "Qui sommes nous ?" présentes sur la page d'Accueil.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"
	</p>
</blockquote>
<?php echo $this->Form->create('Param');
	echo $this->Form->input('param_about_ours', array('label' => 'Qui sommes nous ?', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Votre présentation"));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
<div style="clear:both"></div>
<script>
	CKEDITOR.replace( 'ParamParamAboutOurs' );
</script>