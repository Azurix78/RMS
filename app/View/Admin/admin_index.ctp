<?php $this->set('title_for_layout', "Administration - Accueil"); ?>
<blockquote class="small">
	<p>
		Grâce à ce formulaire, vous pourrez modifier le contenu des informations de la rubrique "Qui sommes nous ?" présentes sur la page d'Accueil.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"
	</p>
</blockquote>
<?php echo $this->Form->create('Param', array('type' => 'file'));
	echo $this->Form->input('param_about_ours', array('label' => 'Qui sommes nous ?', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Votre présentation"));
  echo $this->Form->input('param_home_link', array('type' => 'file', 'label' => 'Image nous aider :', 'class' => 'form-control'));
	echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
<div style="clear:both"></div>
<hr>
<blockquote class="small"><p>Grâce à ce formulaire, vous pourrez modifier les liens de vos reseaux sociaux.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"</p></blockquote>
<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter un lien vers un réseau social</span>", array('controller'=>'socials','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Nom<i class="fa sort"></i></th>
      <th>Lien<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['Social']['social_id']; ?></td>
        <td><?php echo $data['Social']['social_name']; ?></td>
        <td><?php echo $data['Social']['social_link']; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'socials', 'action' => 'edit', $data['Social']['social_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'socials', 'action' => 'remove', $data['Social']['social_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>

<script>
	CKEDITOR.replace( 'ParamParamAboutOurs' );
</script>