<?php

require_once __DIR__."/DAO.php";

class SkirmDAO extends DAO
{
    public function create()
    {

    }

    public function getSkirmsByUserId($userId)
    {
        $sql = "SELECT * FROM st_skirms WHERE user_id = :user_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":user_id", $userId);

        if($stmt->execute())
        {
            $arrSkirms = $stmt->fetchAll(PDO::FETCH_ASSOC);

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