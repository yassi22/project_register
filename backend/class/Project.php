<?php 

   require_once 'Dbconfig.php';  
   
   class Project extends DbConfig { 
   
   private $titleBool; 
   private $desBool; 
   

   /*
   @param mixed $id
   @param mixed $title
   @param mixed $des
   @return true|string|void
*/
 
 
      public function getAllProjects(){
       $sql = "SELECT * FROM projecten";
       $stmt = $this->connect()->prepare($sql);  
       $stmt->execute();  
       return $stmt->fetchAll(PDO::FETCH_OBJ);    
 }


     public function getProject($id)
   { 
      $this->updateView($id);

      $sql = "SELECT * FROM projecten WHERE project_id = :id";
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
   }


   public function getPopulairProjects()
   {
      $sql = "SELECT * FROM projecten ORDER BY views DESC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }



   public function getAlphaProjects()
   {
      $sql = "SELECT * FROM projecten ORDER BY projectnaam ASC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

   public function getRecentProjects()  
   {
      $sql = "SELECT * FROM projecten ORDER BY created_on DESC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

 
   public function getDefault()
   {
      $sql = "SELECT * FROM projecten";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
    

   public function updateView($id){ 
      $jan = "UPDATE projecten set views=(views+1) WHERE project_id =:id";  
      $stmt = $this->connect()->prepare($jan);  
      $stmt->bindParam(":id", $id);
      $stmt->execute(); 
   }


 }
