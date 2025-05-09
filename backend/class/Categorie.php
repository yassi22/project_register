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
 
    public function getCategorie_projecten($id)
    {
        $sql ="SELECT * FROM categorieen INNER JOIN categoriee_projecten on categorie_id = categoriee_projecten.categorieen_categorie_id AND categoriee_projecten.projecten_project_id = :id ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } 
 

 
}
