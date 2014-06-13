<div style="overflow:hidden;">
<?php

echo $this->Form->create('Program');
	echo $this->Form->input('program_name', array('label' => 'Titre du programme :', 'class' => 'form-control', 'placeholder' => 'Titre'));
	echo $this->Form->textarea('program_content', array());
  echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'ProgramProgramContent' );
</script>
</div>
<div style="overflow:hidden;">
<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter une action à ce programme</span>", array('controller'=>'actions','action'=>'add', 'admin' => true, $id), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px;margin-top:10px;', 'escape'=>false)); ?>
</div>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Nom de l'action<i class="fa sort"></i></th>
      <th>Publiée<i class="fa sort"></i></th>
      <th>Date de création<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($actions as $data) { ?>
      <tr>
        <td><?php echo $data['Action']['action_id']; ?></td>
        <td><?php echo $data['Action']['action_title']; ?></td>
        <td><?php echo ($data['Action']['action_is_activated'] == 1) ? "<a href=\"/admin/actions/activated/" . $data['Action']['action_id'] . "\" class=\"btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/actions/activated/" . $data['Action']['action_id'] . "\" class=\"btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php echo $data['Action']['action_date_created']; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'actions', 'action' => 'edit', $data['Action']['action_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'actions', 'action' => 'remove', $data['Action']['action_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>

<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter un compte rendu à ce programme</span>", array('controller'=>'reports','action'=>'add', 'admin' => true, $id), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Titre du compte rendu<i class="fa sort"></i></th>
      <th>Publié<i class="fa sort"></i></th>
      <th>Date de création<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($reports as $data) { ?>
      <tr>
        <td><?php echo $data['Report']['report_id']; ?></td>
        <td><?php echo $data['Report']['report_name']; ?></td>
        <td><?php echo ($data['Report']['report_is_activated'] == 1) ? "<a href=\"/admin/reports/activated/" . $data['Report']['report_id'] . "\" class=\"btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/reports/activated/" . $data['Report']['report_id'] . "\" class=\"btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php echo $data['Report']['report_date']; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'reports', 'action' => 'edit', $data['Report']['report_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'reports', 'action' => 'remove', $data['Report']['report_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>
