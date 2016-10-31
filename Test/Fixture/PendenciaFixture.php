<?php
/**
 * Pendencia Fixture
 */

class PendenciaFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data_abertura' => array('type' => 'date', 'null' => false, 'default' => null),
		'data_fechamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'consulta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_pendencias_consultas1_idx' => array('column' => 'consulta_id', 'unique' => 0)
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
			'data_abertura' => '2015-08-26',
			'data_fechamento' => '2015-08-26',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'consulta_id' => 1
		),
		array(
			'id' => 2,
			'data_abertura' => '2015-08-26',
			'data_fechamento' => '2015-08-26',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'consulta_id' => 1
		),
	);

}
