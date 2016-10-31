<?php
/**
 * Anexo Fixture
 */

class AnexoFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array(
			'type' => 'string',
			'null' => true,
			'default' => null,
			'length' => 45,
			'collate' => 'utf8_general_ci',
			'charset' => 'utf8'
		),
		'arquivo' => array(
			'type' => 'string',
			'null' => false,
			'default' => null,
			'collate' => 'utf8_general_ci',
			'charset' => 'utf8'
		),
		'data_de_criacao' => array(
			'type' => 'date',
			'null' => false,
			'default' => null
		),
		'consulta_id' => array(
			'type' => 'integer',
			'null' => true,
			'default' => null,
			'unsigned' => false,
			'key' => 'index'
		),
		'indexes' => array(
			'PRIMARY' => array(
				'column' => 'id',
				'unique' => 1
			),
			'fk_anexos_consultas1_idx' => array(
				'column' => 'consulta_id',
				'unique' => 0
			)
		),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_general_ci',
			'engine' => 'InnoDB'
		)
	);
	/**
	 * Inicializa AnexoFixture
	 *
	 * @return void
	 */

	public function init() {
		$this->records = array(
			array(
				'id' => 1,
				'nome' => 'file_deletemeAll',
				'arquivo' => 'image.jpg',
				'data_de_criacao' => '2015-08-26',
				'consulta_id' => 1
			),
			array(
				'id' => 2,
				'nome' => 'file_deletemeAll',
				'arquivo' => 'image.jpg',
				'data_de_criacao' => '2015-08-26',
				'consulta_id' => 1
			),
		);
		parent::init();
	}

}
