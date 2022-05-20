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


    public function getDiensten_Project($id)
    {
        $sql = "SELECT * FROM diensten INNER JOIN projecten_diensten on diensten_id = projecten_diensten.diensten_diensten_id AND projecten_diensten.projecten_project_id = :id ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } 


    
}
