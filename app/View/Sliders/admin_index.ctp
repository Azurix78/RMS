<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter une actualité</span>", array('controller'=>'sliders','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Titre du slider<i class="fa sort"></i></th>
      <th>Texte du slider<i class="fa sort"></i></th>
      <th>Publiée<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['Slider']['slider_id']; ?></td>
        <td><?php echo $data['Slider']['slider_name']; ?></td>
        <td><?php echo $data['Slider']['slider_desc']; ?></td>
        <td><?php echo ($data['Slider']['slider_is_activated'] == 1) ? "<a href=\"/admin/sliders/activated/" . $data['Slider']['slider_id'] . "\" class=\"btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/sliders/activated/" . $data['Slider']['slider_id'] . "\" class=\"btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'sliders', 'action' => 'edit', $data['Slider']['slider_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'sliders', 'action' => 'remove', $data['Slider']['slider_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>
