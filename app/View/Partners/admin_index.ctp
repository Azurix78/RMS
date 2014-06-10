<table class="table table-bordered sortableTable responsive-table">
  <thead>
    <tr>
      <th>#<i class="fa sort"></i></th>
      <th>Nom du partenaire<i class="fa sort"></i></th>
      <th>Page accueil<i class="fa sort"></i></th>
      <th>Page partenaire<i class="fa sort"></i></th>
      <th>Date de création<i class="fa sort"></i></th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody><?php
    foreach($datas as $data) { ?>
      <tr>
        <td><?php echo $data['Partner']['partner_id']; ?></td>
        <td><?php echo $data['Partner']['partner_name']; ?></td>
        <td><?php echo ($data['Partner']['partner_to_home'] == 1) ? "<a href=\"/admin/partners/activated/0/" . $data['Partner']['partner_id'] . "\" class=\"btn btn-success btn-xs btn-flat btn-rect\">Activé</a>" : "<a href=\"/admin/partners/activated/0/" . $data['Partner']['partner_id'] . "\" class=\"btn btn-danger btn-xs btn-flat btn-rect\">Désactivé</a>"; ?></td>
        <td><?php echo ($data['Partner']['partner_to_page'] == 1) ? "<a href=\"/admin/partners/activated/1/" . $data['Partner']['partner_id'] . "\" class=\"btn btn-success btn-xs btn-flat btn-rect\">Activé</a>" : "<a href=\"/admin/partners/activated/1/" . $data['Partner']['partner_id'] . "\" class=\"btn btn-danger btn-xs btn-flat btn-rect\">Désactivé</a>"; ?></td>
        <td><?php //echo date('Y-m-d', $data['Partner']['partner_date_added']); ?></td>
        <td><?php
          echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('controller' => 'partners', 'action' => 'edit', $data['Partner']['partner_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:blue;', 'admin' => true, 'escape' => false));
          echo $this->Html->link('<i class="glyphicon glyphicon-remove"></i>', array('controller' => 'partners', 'action' => 'remove', $data['Partner']['partner_id']), array('class' => 'btn btn-xs btn-default', 'style' => 'color:red;margin-left:5px;', 'admin' => true, 'escape' => false));
        ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>