<?php

class User extends AppModel {

	public $validate = array(
        'password' => array(
            'empty'=>array(
                'rule' => 'notEmpty',
                'message' => 'Ce champ ne peut pas être vide',
            ),
            'between' => array(
                'rule'    => array('between', 5, 50),
                'message' => 'Entre 5 et 50 caractères'
            )
        ),
    );
}

?>