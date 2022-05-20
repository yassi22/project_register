 
 <?php

require_once 'Dbconfig.php'; 
require_once 'Project.php';

class ZoekProject extends DbConfig
{

 
 public function searchProject($projectnaam) {
 $sql = "SELECT * FROM projecten WHERE projectnaam = :projectnaam";
 $stmt = $this->connect()->prepare($sql);
 $stmt->bindParam(":projectnaam", $projectnaam);
 $stmt->execute();
 return $stmt->fetch(PDO::FETCH_OBJ);
 }
  

   
 
} 


?>
 
 
 
 
 
 
 
 
 
 
 

