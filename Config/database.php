<?php

class DATABASE_CONFIG
{

       //Initalize the default variable as Null
       public $default = null;

       /**
  	 * Constructor for DATABASE_CONFIG class
  	 */
    public function __construct()
    {
           // Local or remote testing settings
           $this->default = array(
              'datasource' => 'Database/Mysql',
              'persistent' => false,
              'host' => getenv('DB_HOST'),
              'login' => getenv('DB_USER'),
              'password' => getenv('DB_PASSWORD'),
              'database' => getenv('DB'),
              'prefix' => '',
              'encoding' => 'utf8'
           );
           $this->test = array(
              'datasource' => 'Database/Mysql',
              'persistent' => false,
              'host' => getenv('DB_TEST_HOST'),
              'login' => getenv('DB_TEST_USER'),
              'password' => getenv('DB_TEST_PASSWORD'),
              'database' => getenv('DB_TEST'),
              'prefix' => '',
              'encoding' => 'utf8'
           );
    }
}
