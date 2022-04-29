<?php

require_once 'Dbconfig.php';

class Diensten extends DbConfig
{

    public function getDiensten()
    {
        $sql = "SELECT * FROM diensten";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
 
 

}
