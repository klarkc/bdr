<?php
namespace Vendor\MyUser;

class MyUserClass
{
    protected $dbconn;

    public function __construct(array $dbConfig)
    {
        $this->dbconn = new DatabaseConnection(
            $dbConfig['localhost'],
            $dbConfig['user'],
            $dbConfig['password']
        );
    }

    public function getUserList()
    {
        $results = $this->dbconn->query('select name from user');

        sort($results);
        return $results;
    }
}
