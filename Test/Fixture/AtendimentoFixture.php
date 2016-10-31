<?php
/**
 * Atendimento Fixture
 */

class AtendimentoFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'inicio' => array('type' => 'time', 'null' => false, 'default' => null),
		'fim' => array('type' => 'time', 'null' => false, 'default' => null),
		'dias' => array('type' => 'string', 'null' => false, 'default' => null, 'unsigned' => false),
		'clinica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'medico_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_atendimentos_clinicas1_idx' => array('column' => 'clinica_id', 'unique' => 0),
			'fk_atendimentos_medicos1_idx' => array('column' => 'medico_id', 'unique' => 0)
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
			'inicio' => '16:39:25',
			'fim' => '16:39:25',
			'dias' => 'a:5:{i:0;s:7:"Segunda";i:1;s:6:"Terça";i:2;s:6:"Quarta";i:3;s:6:"Quinta";i:4;s:5:"Sexta";}',
			'clinica_id' => 1,
			'medico_id' => 1
		)
	);

}
