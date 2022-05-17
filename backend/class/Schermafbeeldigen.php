<?php

require_once 'Dbconfig.php';
require_once 'Project.php'; 

class Schermafbeeldingen extends DbConfig
{


   public function addSchermafbeelding($naamplaatje, $project_id)
   {
      try {
         $sql = "INSERT INTO schermafbeeldigen(naam,project_id) 
          VALUES (:naamplaatje,:projectID)";
         $db = $this->connect();
         $stmt = $db->prepare($sql);
         $stmt->bindParam(":naamplaatje", $naamplaatje);
         $stmt->bindParam(":projectID", $project_id);
         if ($stmt->execute()) {

            return $db->lastInsertId();
            //header("Location: overzicht-projecten.php"); 

         } else {
            throw new Exception("Het invoeren van een schermafbeelding is niet gelukt ");
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