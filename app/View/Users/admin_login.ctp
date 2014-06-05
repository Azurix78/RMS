<?php

echo $this->Form->create('User');
	echo $this->Form->inputs(array('username', 'password'));
echo $this->Form->end('Connexion');

?>

