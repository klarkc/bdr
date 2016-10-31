<?php
/**
 * Risco Fixture
 */

class RiscoFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'nome_UNIQUE' => array('column' => 'nome', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = array(
		array(
			'id' => 1,
			'nome' => 'Biológico - Vírus'
		),
		array(
			'id' => 2,
			'nome' => 'Mecânico - Perna Quebrada'
		),
		array(
			'id' => 3,
			'nome' => 'Químico - Derramamento de Líquidos'
		),
		array(
			'id' => 4,
			'nome' => 'Químico - Queimaduras'
		),
		array(
			'id' => 5,
			'nome' => 'Outro - Esporte'
		),
		array(
			'id' => 6,
			'nome' => 'Viagem Especial'
		),
		array(
			'id' => 7,
			'nome' => 'Inexistente - Viagem Especial'
		),
	);

}
