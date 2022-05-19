<?php

require_once 'Dbconfig.php';
require_once 'Project.php'; 

class Schermafbeeldingen extends DbConfig
{
//  momenteel is dit niet nodig... hier word nog later nog naar gekeken....
//    public function addSchermafbeelding($naamplaatje, $project_id){ 
//             try {
//                 $sql = "INSERT INTO schermafbeeldingen(naam,project_id) 
//                         VALUES (:bestand,:id)";
//                 $db = $this->connect();
//                 $stmt = $db->prepare($sql);
//                 $stmt->bindParam(":bestand", $naamplaatje);
//                 $stmt->bindParam(":id", $project_id); 
//                 if ($stmt->execute()) {

//                 return true;
//                 } else {
//                     throw new Exception("Er ontstond een fout tijdens het maken van een project ");
//                 }
//             } catch (Exception $e) {
//                 return $e->getMessage();
//             }
//         }
    
  

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