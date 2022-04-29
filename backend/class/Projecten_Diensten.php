<?php

require_once 'Dbconfig.php';
require_once 'Diensten.php'; 
require_once 'Project.php'; 

class Projecten_Diensten extends DbConfig
{


public function Addid($id) { 
    $sql="";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();


}


 
}
