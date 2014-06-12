<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter un programme</span>", array('controller'=>'programs','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Titre du programme<i class="fa sort"></i></th>
      <th>Publiée<i class="fa sort"></i></th>
      <th>Date de création<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['Program']['program_id']; ?></td>
        <td><?php echo $data['Program']['program_name']; ?></td>
        <td><?php echo ($data['Program']['program_is_activated'] == 1) ? "<a href=\"/admin/program/activated/" . $data['Program']['program_is_activated'] . "\" class=\"btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/program/activated/" . $data['Program']['program_id'] . "\" class=\"btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php echo $data['Program']['created']; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'programs', 'action' => 'edit', $data['Program']['program_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'programs', 'action' => 'remove', $data['Program']['program_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>
