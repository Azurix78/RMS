<?php

class User extends AppModel {

	public $validate = array(
    	'password' => array(
        	'rule' => array('minLength', 8)
    	)
    );
}

?>