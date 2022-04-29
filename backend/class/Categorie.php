<?php

require_once 'Dbconfig.php';

class Categorie extends DbConfig
{

    public function getCategorie()
    {
        $sql = "SELECT * FROM categorieen";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


   // public function getCategorie_Projecten()
   // {
   //     $sql = "SELECT * FROM diensten INNER JOIN projecten_diensten on diensten_id = projecten_diensten.diensten_diensten_id AND projecten_diensten.projecten_project_id = 4 ";
    //    $stmt = $this->connect()->prepare($sql);
    //    $stmt->execute();
    //    return $stmt->fetchAll(PDO::FETCH_OBJ);
    //} 


}
