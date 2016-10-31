<?php
App::uses('AppController', 'Controller');

class AppControllerTest extends ControllerTestCase {

	/**
	 * Fixtures
	 *
	 * @var array
	 */
	public $fixtures = array();

	public $mockUser = array(
		'id' => 1,
		'username' => 'admin',
		'role' => 'admin'
	);

	protected $_controller;

	/**
	 * Configura teste
	 *
	 * @return void
	 */
	public function setUp() {
		$this->_controller = $this->generate('App', array(
			'components' => array(
				'Session',
				'Auth' => array('user')
			)
		));

		$this->_controller->Auth
			->staticExpects($this->any())
			->method('user')
			->will($this->returnValue($this->mockUser));
	}

}
