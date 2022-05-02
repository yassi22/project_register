<?php

require_once 'Dbconfig.php';

class Schermafbeelding extends DbConfig{
 

      public function addProject($projectnaam, $datum, $websitelink, $omschrijving, $klantnaam)
   {
      try {
         $sql = "INSERT INTO projecten(projectnaam,datum,website_link,omschrijving,klant_id) 
          VALUES (:projectnaam,:datum,:websitelink,:omschrijving,:klantnaam)";
         $db = $this->connect();

         $stmt = $db->prepare($sql);
         $stmt->bindParam(":projectnaam", $projectnaam);
         $stmt->bindParam(":datum", $datum);
         $stmt->bindParam(":websitelink", $websitelink);
         $stmt->bindParam(":omschrijving", $omschrijving);
         $stmt->bindParam(":klantnaam", $klantnaam);
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