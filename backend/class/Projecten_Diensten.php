<?php

require_once 'Dbconfig.php';
require_once 'Diensten.php'; 
require_once 'Project.php'; 

class Projecten_Diensten extends DbConfig
{


    public function ADDid($id,$diensten_id)
    {
        try {
            $sql = "INSERT INTO projecten_diensten(projecten_project_id,diensten_diensten_id) 
          VALUES (:project_id, :diensten_id)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":project_id", $id);
            $stmt->bindParam(":diensten_id", $diensten_id);
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
