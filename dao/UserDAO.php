<?php

require_once WWW_ROOT.'classes'.DS.'DatabasePDO.php';

class UsersDAO
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = DatabasePDO::getInstance();
    }

    public function create()
    {

    }

    public function read()
    {

    }

    public function udpdate()
    {

    }

    public function delete()
    {
    	
    }
}