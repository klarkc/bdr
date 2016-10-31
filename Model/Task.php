<?php

App::uses('AppModel', 'Model');

/**
 * Task Model
 *
 */
class Task extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'tarefa';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'title' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => 'Title cannot be empty'
		),
		'description' => array(
            'rule' => array('maxLength', '250'),
            'allowEmpty' => true,
            'required' => false,
            'message' => 'Description is too long'
		),
        'priority' => array(
            'rule' => 'numeric',
            'message' => 'Invalid priority value'
        )
	);

}
