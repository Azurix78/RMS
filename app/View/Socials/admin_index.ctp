<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter une actualité</span>", array('controller'=>'socials','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
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
