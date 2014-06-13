<?php

echo $this->Form->create('User');
echo $this->Form->inputs(array('username', 'password'));
echo $this->Form->button('Connexion', array('type' => 'submit', 'class' => 'btn btn-metis-3 btn-sw'));

?>

