<?php $this->set('title_for_layout', "Edition des informations de contact"); ?>
<blockquote class="small"><p>Grâce à ce formulaire, vous pourrez modifier le contenu des informations présentes dans la page contact du site.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"</p></blockquote>
<?php echo $this->Form->create('Param');
	echo $this->Form->input('param_info_contact', array('label' => 'Informations sur la page contact', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Adresse, fax, boîte postale..."));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
<div style="clear:both"></div>
<hr>
<blockquote class="small"><p>Ce formulaire vous permet de modifier l'adresse mail de la personne qui recevra les mails provenant de la page contact du site.<br> Il vous suffit de modifier le mail et de cliquer sur "Modifier"</p></blockquote>
<?php echo $this->Form->create('Param'); ?>
<label>Mail de destination du formulaire de contact :</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
<?php	echo $this->Form->input('param_mail_contact', array('label' => '', 'type' => 'mail', 'class' => 'form-control', 'placeholder' => "Adresse, fax, boîte postale...")); ?>
</div>
	<?php echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Html->link("Annuler", array('controller' => 'contact', 'action' => 'index'), array('class' => 'btn btn-default pull-right', 'style' => 'margin:10px;', 'admin' => true, 'escape' => false));
echo $this->Form->end(); ?>

<script>
	CKEDITOR.replace( 'ParamParamInfoContact' );
</script>