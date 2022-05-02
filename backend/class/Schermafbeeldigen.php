<?php

require_once 'Dbconfig.php';

class Schermafbeelding extends DbConfig{
 

      public function addSchermafbeelding($naamplaatje,$project_id)
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


    public function getSchermafbeeldigen()
   {
      $sql = "SELECT * FROM Schermafbeeldigen";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   } 





 



}