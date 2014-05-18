<?php

echo $this->Form->create('User', array('action' => 'login'));
	echo $this->Form->inputs(array('username', 'password'));
echo $this->Form->end('Connexion');

?>