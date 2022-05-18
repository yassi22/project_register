<?php

require_once 'Dbconfig.php';
require_once 'Project.php'; 

class Schermafbeeldingen extends DbConfig
{


   public function addSchermafbeelding($naamplaatje, $project_id){
        $naamplaatje = $_FILES['file']['name'];
        $target_dir = "/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // hier wordt een bestand type geselecteerd
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // een array om te kijken welke bestand type het is 
        $extensions_arr = array("jpg", "jpeg", "png", "gif");

        // Check extension
        if (in_array($imageFileType, $extensions_arr)) {
        }

        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $naamplaatje);

        try {
            $sql = "INSERT INTO schermafbeeldigen(naam,project_id) 
          VALUES (:afbeelding)";
            $db = $this->connect();

            $stmt = $db->prepare($sql);
            $stmt->bindParam(":afbeelding", $naamplaatje);
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