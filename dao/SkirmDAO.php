<?php

require_once WWW_ROOT.'classes'.DS.'DatabasePDO.php';

class SkirmDAO
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = DatabasePDO::getInstance();
    }

    public function create()
    {

    }

    public function read($userId)
    {
        $sql = "SELECT * FROM st_skirms WHERE user_id = :user_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":user_id", $userId);

        if($stmt->execute())
        {
            $arrSkirms = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!empty($arrSkirms))
            {
                return $arrSkirms;
            }
        }
        
        return array();
    }

    public function udpdate()
    {

    }

    public function delete()
    {
        
    }
}