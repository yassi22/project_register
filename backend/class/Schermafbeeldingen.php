<?php

require_once 'Dbconfig.php';
require_once 'Project.php'; 

class Schermafbeeldingen extends DbConfig
{
 
   public function addSchermafbeelding($naamplaatje, $project_id){
        try {
            $sql = "INSERT INTO schermafbeeldigen(naam,project_id) 
            VALUES ('" . $naamplaatje . "')";
            $db = $this->connect(); 
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":file", $naamplaatje);
            if ($stmt->execute()) {
                //header("Location: overzicht-projecten.php");
                return true;
            } else {
                throw new Exception("Het invoeren van een plaatje is niet gelukt");
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    } 
  

   public function getALLSchermafbeeldigen()
   {
      $sql = "SELECT * FROM scherafbeeldingen";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }


   public function getSchermafbeeldigen($id)
   {
      $sql = "SELECT naam FROM schermafbeeldingen WHERE project_id = $id";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
}

?> 