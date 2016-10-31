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
			'notBlank' => array(
				'rule' => array('notBlank'),
				'required' => true,
                'message' => 'Title cannot be empty'
			),
		),
		'description' => array(
			'notBlank' => array(
				'rule' => array('maxLength', '250'),
                'allowEmpty' => true,
				'required' => false,
				'message' => 'Description is too long',
			)
		)
	);

}
