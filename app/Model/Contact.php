<?php

class Contact extends AppModel {

	public $useTable = false;

	public $validate = array(
        'name' => array(
            'empty'=>array(
                'rule' => 'notEmpty',
                'message' => 'Ce champ ne peut pas être vide',
            ),
            'between' => array(
                'rule'    => array('between', 5, 50),
                'message' => 'Entre 5 et 50 caractères'
            )
        ),
        'object' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric',
                'required' => true,
                'message'  => 'Chiffres et lettres uniquement !'
            ),
            'between' => array(
                'rule'    => array('between', 5, 50),
                'message' => 'Entre 5 et 15 caractères'
            )
        ),
        'message' => array(
            'empty'=>array(
                'rule' => 'notEmpty',
                'message' => 'Ce champ ne peut pas être vide',
            ),
            'between' => array(
                'rule'    => array('between', 5, 2000),
                'message' => 'Entre 5 et 2000 caractères'
            )
        ),
        'mail' => array(
            'pattern'=>array(
                 'rule'      => '/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',
                    'message'   => 'Ce mail n\'est pas valide',
            ),
            'empty'=>array(
                'rule' => 'notEmpty',
                'message' => 'Ce champ ne peut pas être vide',
            ))
    );
}

?>