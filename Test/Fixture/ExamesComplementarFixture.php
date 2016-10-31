<?php
/**
 * ExamesComplementar Fixture
 */

class ExamesComplementarFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data' => array('type' => 'date', 'null' => true, 'default' => null),
		'situacao' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'exame_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'consulta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'laboratorio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_exames_complementares_exames1_idx' => array('column' => 'exame_id', 'unique' => 0),
			'fk_exames_complementares_consultas1_idx' => array('column' => 'consulta_id', 'unique' => 0),
			'fk_exames_complementares_laboratorios1_idx' => array('column' => 'laboratorio_id', 'unique' => 0)
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
			'data' => '2015-08-26',
			'situacao' => 1,
			'exame_id' => 1,
			'consulta_id' => 1,
			'laboratorio_id' => 1
		),
		array(
			'id' => 2,
			'data' => '2015-08-26',
			'situacao' => 1,
			'exame_id' => 1,
			'consulta_id' => 1,
			'laboratorio_id' => 1
		),
	);

}
