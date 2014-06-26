<blockquote class="small">
	<p>
		Grâce à ce formulaire, vous pourrez modifier votre mot de passe. Appuyez sur "Changer mot de passe" pour accepter la modification.
	</p>
</blockquote>
<?php
echo $this->Form->create('User');
?>
<label>Changer mot de passe</label>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-lock"></i></span>
	<?php	echo $this->Form->input('password', array('label' => '', 'type' => 'password', 'class' => 'form-control')); ?>
</div>
<input type="submit" class='btn btn-primary pull-left' style='margin-top: 10px;' value="Changer mot de passe" />
<?php
echo $this->Form->end();
?>

