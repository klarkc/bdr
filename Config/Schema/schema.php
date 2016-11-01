<?php 
class AppSchema extends CakeSchema
{

    public function before($event = array())
    {
           return true;
    }

    public function after($event = array())
    {
    }

       public $tasks = array(
          'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
          'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
          'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
          'priority' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
          'indexes' => array(
             'PRIMARY' => array('column' => 'id', 'unique' => 1)
          ),
          'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
       );
}
