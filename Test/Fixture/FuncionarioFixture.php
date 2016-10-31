<?php
/**
 * Funcionario Fixture
 */

class FuncionarioFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 90, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nascimento' => array('type' => 'date', 'null' => false, 'default' => null),
		'estado_civil' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rg_orgao_expedidor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ctps' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'serie' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'profissao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_funcionarios_profissoes1_idx' => array('column' => 'profissao_id', 'unique' => 0)
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'nascimento' => '2015-08-26',
			'estado_civil' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit ame',
			'rg' => 'Lorem ipsum dolor sit amet',
			'rg_orgao_expedidor' => 'SSP/BA',
			'ctps' => 'Lorem ipsum dolor sit amet',
			'serie' => 'Lorem ipsum dolor sit amet',
			'profissao_id' => 1
		),
		array(
			'id' => 2,
			'nome' => 'Lorem ipsum dolor sit amet',
			'nascimento' => '2015-08-26',
			'estado_civil' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit ame',
			'rg' => 'Lorem ipsum dol dfw or sit amet',
			'rg_orgao_expedidor' => 'SSP/BA',
			'ctps' => 'Lorem ipsum dolor sit amet',
			'serie' => 'Lorem ipsum dolor sit amet',
			'profissao_id' => 1
		),
	);

}
