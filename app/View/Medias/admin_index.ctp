<blockquote class="small"><p>Grâce à ce formulaire, vous pourrez modifier les articles de presse et leur visibilité.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"</p></blockquote>
<?php echo $this->Html->link("<i class=\"fa fa-plus\"></i><span class=\"link-title\"> Ajouter un article de presse</span>", array('controller'=>'medias','action'=>'add', 'admin' => true), array('class' => 'link-title btn btn-primary btn-xs pull-right','admin' => true, 'style' => 'margin-bottom: 10px', 'escape'=>false)); ?>
<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#</i></th>
      <th>Titre de l'article</i></th>
      <th>Affiché <em style="
    font-size: 10px;
    color: grey!important;
">(Cliquer pour changer)</em></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['Media']['media_id']; ?></td>
        <td><?php echo $data['Media']['media_name']; ?></td>
        <td><?php echo ($data['Media']['media_is_activated'] == 1) ? "<a href=\"/admin/medias/activated/" . $data['Media']['media_id'] . "\"id=\"custom-activated\" class=\" btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/medias/activated/" . $data['Media']['media_id'] . "\" id=\"custom-activated\" class=\"custom-activated btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'medias', 'action' => 'edit', $data['Media']['media_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'medias', 'action' => 'remove', $data['Media']['media_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>