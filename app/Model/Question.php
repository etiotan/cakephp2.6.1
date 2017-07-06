<?php
class Question extends AppModel {
    public $validate = array(
        'firstname' => array(
            'rule' => 'notEmpty'
        ),
        'mood' => array(
            'rule' => 'notEmpty'
        )
    );
}
