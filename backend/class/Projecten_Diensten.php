<?php

require_once 'Dbconfig.php';
require_once 'Diensten.php'; 
require_once 'Project.php'; 

class Projecten_Diensten extends DbConfig
{


public function Addid($project_id,$diensten_id) { 
    $sql="INSERT INTO projecten_diensten(projecten_project_id,diensten_dienst_id)
    VALUES($project_id, $diensten_id)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
 
}


 
}
