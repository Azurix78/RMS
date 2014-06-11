<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter un intervenant</span>", array('controller'=>'teams','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#</i></th>
      <th>Nom de l'intervenant</i></th>
      <th>Affiché <em style="
    font-size: 10px;
    color: grey!important;
">(Cliquer pour changer)</em></i></th>
      <th>Date de création</i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['Team']['team_id']; ?></td>
        <td><?php echo $data['Team']['team_name']; ?></td>
        <td><?php echo ($data['Team']['team_is_activated'] == 1) ? "<a href=\"/admin/teams/activated/" . $data['Team']['team_id'] . "\"id=\"custom-activated\" class=\" btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/partners/activated/" . $data['Team']['team_id'] . "\" id=\"custom-activated\" class=\"custom-activated btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php //echo date('Y-m-d', $data['Team']['team_date_added']); ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'teams', 'action' => 'edit', $data['Team']['team_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'teams', 'action' => 'remove', $data['Team']['team_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>