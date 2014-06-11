<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter une actualité</span>", array('controller'=>'news','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Titre de l'actualité<i class="fa sort"></i></th>
      <th>Publiée<i class="fa sort"></i></th>
      <th>Date de création<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['News']['news_id']; ?></td>
        <td><?php echo $data['News']['news_title']; ?></td>
        <td><?php echo ($data['News']['news_is_activated'] == 1) ? "<a href=\"/admin/news/activated/" . $data['News']['news_is_activated'] . "\" class=\"btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/news/activated/" . $data['News']['news_id'] . "\" class=\"btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php echo $data['News']['created']; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'news', 'action' => 'edit', $data['News']['news_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'news', 'action' => 'remove', $data['News']['news_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>
