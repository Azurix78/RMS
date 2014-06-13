<blockquote class="small"><p>Grâce à ce formulaire, vous pourrez modifier le contenu des informations présentes dans la page de l'équipe.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"</p></blockquote>
<?php echo $this->Form->create('Param');
  echo $this->Form->input('param_team_desc', array('label' => 'Informations sur l\'équipe', 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => "Les informations présentes au début de la page équipe"));
  echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
  echo $this->Form->input('id', array('type' => 'hidden'));
  echo $this->Form->end();
?>
<div style="clear:both"></div>
<hr>

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
        <td><?php echo ($data['Team']['team_is_activated'] == 1) ? "<a href=\"/admin/teams/activated/" . $data['Team']['team_id'] . "\" class=\"custom-activated btn btn-success btn-xs btn-flat\">Activé</a>" : "<a href=\"/admin/teams/activated/" . $data['Team']['team_id'] . "\" class=\"custom-activated btn btn-danger btn-xs btn-flat\">Désactivé</a>"; ?></td>
        <td><?php echo $data['Team']['team_date_added']; ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'teams', 'action' => 'edit', $data['Team']['team_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'teams', 'action' => 'remove', $data['Team']['team_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>


<script>
  CKEDITOR.replace( 'ParamParamTeamDesc' );
</script>