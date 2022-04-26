<?php

require_once 'Dbconfig.php';

class Project extends DbConfig
{

   private $titleBool;
   private $desBool;


   /*
   @param mixed $id
   @param mixed $title
   @param mixed $des
   @return true|string|void
*/

   
      /* 
      De methode getAllProjects zorgt er voor dat alles uit de projecten tabel word 
      gehaald. 
        @return true|string|void
      */   
   public function getAllProjects()
   {
      $sql = "SELECT * FROM projecten";
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
   public function getProject($id)
   {
      $this->updateView($id);

      $sql = "SELECT * FROM projecten WHERE project_id = :id";
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
   }

     /* 
      De methode getPopulairProjects zorgt er voor dat projecten
      met de hoogste aantal views word opgehaald. 
       @return true|string|void 
      */  
   public function getPopulairProjects()
   {
      $sql = "SELECT * FROM projecten ORDER BY views DESC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

     /* 
     De methode getAlhpaProjects zorgt er voor dat projecten  
     Op Alphabetische volgorde word opgehaald 
      @return true|string|void 
      */   

   public function getAlphaProjects()
   {
      $sql = "SELECT * FROM projecten ORDER BY projectnaam ASC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
    
     /* 
     De methode getRecentProjects zorgt er voor dat meest recenten project(wat toegevoegd is)
     word opgehaald.  
      @return true|string|void 
      */   
   public function getRecentProjects()
   {
      $sql = "SELECT * FROM projecten ORDER BY created_on DESC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

     /* 
     De methode getDefault zorgt er voor de alle projecten word opgehaald. 
     Dit is gedaan voor de sorteer onderdeel van de applicatie. 
      @return true|string|void 
      */  
   public function getDefault()
   {
      $sql = "SELECT * FROM projecten";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

      /* 
     De methode updateView zorgt er voor dat de kolom views word aangepast waneer een gebruiker 
     een project bekijkt. 
      @return true|string|void 
        @param mixed $id
      */ 
       
   public function updateView($id)
   {
      $view = "UPDATE projecten set views=(views+1) WHERE project_id =:id";
      $stmt = $this->connect()->prepare($view);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
   }


   public function addPost($projectnaam, $datum, $websitelink,$omschrijving,$klantnaam )
   {
      try {
         $sql = "INSERT INTO projecten (projectnaam,datum,website_link,omschrijving,klant_id )
      VALUES (:projectnaam,:datum,:websitelink,:omschrijving,:klantnaam)";
         $stmt = $this->connect()->prepare($sql);
         $stmt->bindParam(":projectnaam", $projectnaam);
         $stmt->bindParam(":datum", $datum);
         $stmt->bindParam(":websitelink", $websitelink);
         $stmt->bindParam(":omschrijving", $omschrijving);
         $stmt->bindParam(":klantnaam", $klantnaam); 
         if ($stmt->execute()) {
            // header("Location: posts.php?page=1"); 
            return true;
         } else {
            throw new Exception("Er ontstond een fout tijdens het maken van een project ");
         }
      } catch (Exception $e) {
         return $e->getMessage();
      }
   }  



}
