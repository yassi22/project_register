<?php

require_once 'Dbconfig.php';

class Diensten extends DbConfig
{


    public function addDienst($dienstnaam)
    {
        try {
            $sql = "INSERT INTO diensten(diensten_naam) 
          VALUES (:dienstnaam)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":projectnaam", $dienstnaam);
            if ($stmt->execute()) {
                //header("Location: overzicht-projecten.php");
                return true;
                var_dump($sql);
            } else {
                throw new Exception("Er ontstond een fout tijdens het maken van een dienst ");
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function deleteProject($id)
    {
        $sql = "DELETE FROM diensten WHERE diensten_id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            // header("Location: posts.php"); 
            return true;
        } else {
            header("Location: project.php?id=$id");
        }
    }



    /* 
      De methode getAllProjects zorgt er voor dat alles uit de projecten tabel word 
      gehaald. 
        @return true|string|void
      */
    public function getAllDiensten()
    {
        $sql = "SELECT * FROM diensten";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /* 
      De methode getProject zorgt ervoor dat een project met een specefieke id word opgehaald 
      uit de tabel projecten 
        @return true|string|void 
        @param mixed $id
      */
    public function getDienst($id)
    {
        $sql = "SELECT * FROM diensten WHERE dienst_id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
