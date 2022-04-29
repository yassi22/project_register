<?php

require_once 'Dbconfig.php';
require_once 'Categorie.php';
require_once 'Project.php';

class Categoriee_projecten extends DbConfig
{

    public function ADDcategorie($id, $categorie_id)
    {
        try {
            $sql = "INSERT INTO categoriee_projecten(categorieen_categorie_id,projecten_project_id) 
          VALUES ( :categorie_id, :project_id)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":categorie_id", $categorie_id);
            $stmt->bindParam(":project_id", $id);
            if ($stmt->execute()) {
                //header("Location: overzicht-projecten.php");
                return true;
            } else {
                throw new Exception("Er ontstond een fout tijdens het invoeren van gegevens in de tabel ");
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
