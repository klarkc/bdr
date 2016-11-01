<?php
/**
 * Task Fixture
 */

class TaskFixture extends CakeTestFixture
{

       /**
  	 * Fields
  	 *
  	 * @var array
  	 */
       public $fields = array(
          'id' => array(
            'type' => 'integer', 'null' => false, 'default' => null,
            'unsigned' => false, 'key' => 'primary'
        ),
        'title' => array(
            'type' => 'string', 'null' => false, 'length' => 45,
            'collate' => 'utf8_general_ci', 'charset' => 'utf8'
        ),
          'description' => array(
            'type' => 'string', 'null' => true, 'default' => null,
            'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'
        ),
          'priority' => array(
            'type' => 'integer', 'null' => false, 'default' => 0
        ),
          'indexes' => array(
             'PRIMARY' => array('column' => 'id', 'unique' => 1)
          ),
          'tableParameters' => array(
            'charset' => 'utf8', 'collate' => 'utf8_general_ci',
            'engine' => 'InnoDB'
        )
       );

       /**
  	 * Records
  	 *
  	 * @var array
  	 */
       public $records = array(
          array(
             'id' => 1,
             'title' => 'Lorem ipsum dolor sit amet',
             'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
             'priority' => 0
          )
       );
}
