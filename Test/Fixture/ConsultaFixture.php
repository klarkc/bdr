<?php
/**
 * Consulta Fixture
 */

class ConsultaFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data_de_abertura' => array('type' => 'date', 'null' => false, 'default' => null),
		'data_de_fechamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'tipo_aso' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'periodicidade' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'funcionario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'medico_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'emprego_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'clinica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'hospitalizacao' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'alergia' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'anemia' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'artropatias' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'asma' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'cardiopatia' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'hepatopatia' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'ca' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'diabetes' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'has' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'diabetes_familiar' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'has_familiar' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etilismo' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'tabagismo' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'tuberculose' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'convulsao' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'tonturas' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'desmaios' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'dst' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'itu' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'flebite' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'psicopatia' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'uso_de_psicotropico' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'outras_medicacoes' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'informacoes_adicionais' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_consultas_funcionarios1_idx' => array('column' => 'funcionario_id', 'unique' => 0),
			'fk_consultas_medicos1_idx' => array('column' => 'medico_id', 'unique' => 0),
			'fk_consultas_empregos1_idx' => array('column' => 'emprego_id', 'unique' => 0),
			'fk_consultas_clinicas1_idx' => array('column' => 'clinica_id', 'unique' => 0)
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
			'data_de_abertura' => '2015-08-26',
			'data_de_fechamento' => '2015-08-26',
			'tipo_aso' => 1,
			'periodicidade' => 1,
			'funcionario_id' => 1,
			'medico_id' => 1,
			'emprego_id' => 1,
			'clinica_id' => 1,
			'hospitalizacao' => 1,
			'alergia' => 1,
			'anemia' => 1,
			'artropatias' => 1,
			'asma' => 1,
			'cardiopatia' => 1,
			'hepatopatia' => 1,
			'ca' => 1,
			'diabetes' => 1,
			'has' => 1,
			'diabetes_familiar' => 'a:2:{i:0;s:1:"0";i:1;s:1:"1";}',
			'has_familiar' => 'a:2:{i:0;s:1:"0";i:1;s:1:"1";}',
			'etilismo' => 1,
			'tabagismo' => 1,
			'tuberculose' => 1,
			'convulsao' => 1,
			'tonturas' => 1,
			'desmaios' => 1,
			'dst' => 1,
			'itu' => 1,
			'flebite' => 1,
			'psicopatia' => 1,
			'uso_de_psicotropico' => 1,
			'outras_medicacoes' => 1,
			'informacoes_adicionais' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 2,
			'data_de_abertura' => '2015-08-26',
			'data_de_fechamento' => '2015-08-26',
			'tipo_aso' => 1,
			'periodicidade' => 1,
			'funcionario_id' => 1,
			'medico_id' => 1,
			'emprego_id' => 1,
			'clinica_id' => 1,
			'hospitalizacao' => 1,
			'alergia' => 1,
			'anemia' => 1,
			'artropatias' => 1,
			'asma' => 1,
			'cardiopatia' => 1,
			'hepatopatia' => 1,
			'ca' => 1,
			'diabetes' => 1,
			'has' => 1,
			'diabetes_familiar' => 'a:2:{i:0;s:1:"0";i:1;s:1:"1";}',
			'has_familiar' => 'a:2:{i:0;s:1:"0";i:1;s:1:"1";}',
			'etilismo' => 1,
			'tabagismo' => 1,
			'tuberculose' => 1,
			'convulsao' => 1,
			'tonturas' => 1,
			'desmaios' => 1,
			'dst' => 1,
			'itu' => 1,
			'flebite' => 1,
			'psicopatia' => 1,
			'uso_de_psicotropico' => 1,
			'outras_medicacoes' => 1,
			'informacoes_adicionais' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
