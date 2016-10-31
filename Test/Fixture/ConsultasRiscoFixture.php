<?php
/**
 * ConsultasRisco Fixture
 */

class ConsultasRiscoFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'risco_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'consulta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_consultas_riscos_riscos1_idx' => array('column' => 'risco_id', 'unique' => 0),
			'fk_consultas_riscos_consultas1_idx' => array('column' => 'consulta_id', 'unique' => 0)
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
			'risco_id' => 1,
			'consulta_id' => 1
		),
		array(
			'id' => 2,
			'risco_id' => 2,
			'consulta_id' => 1
		),
		array(
			'id' => 3,
			'risco_id' => 3,
			'consulta_id' => 1
		),
		array(
			'id' => 4,
			'risco_id' => 4,
			'consulta_id' => 1
		),
		array(
			'id' => 5,
			'risco_id' => 5,
			'consulta_id' => 1
		),
		array(
			'id' => 6,
			'risco_id' => 6,
			'consulta_id' => 1
		),
		array(
			'id' => 7,
			'risco_id' => 7,
			'consulta_id' => 1
		),
	);

}
