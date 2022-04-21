<?php 
 require_once '../autoloader.php';  

if(isset($_POST['addPost'])) {
    $feedback =  $postIns->addPost($_POST['title'],$_POST['description'],$_SESSION['id']); 
    if($feedback === true){  
      $logIns->setTitle("Post aangemaakt");  
      $logIns->setBody("De gebruiker heeft een nieuwe post aangemaakt");
      $logIns->setDescription("De gebruiker heeft een nieuwe post aangemaakt");   
      $logIns->setThreatlevel(1);
      $logIns->addLog($_SESSION['id']);  
      
        echo "Het aanmaken van een post is gelukt"; 
      } else { 
       echo $feedback;
     }  
    }  

 
      
   
if(isset($_POST['updatePost'])) {  
    $feedback = $postIns->updatePost($_GET['id'], $_POST['title'], $_POST['description']); 
      if($feedback === true) {   
        $logIns->setTitle("Post geupdate");  
        $logIns->setBody("De gebruiker heeft een post aangepast");
        $logIns->setDescription("De gebruiker heeft een post aangepast");   
        $logIns->setThreatlevel(2);
        $logIns->addLog($_SESSION['id']);  
       
        header("refresh:1.5;url=posts.php?page=1"); 
        echo "De post is aangepast";
      }else { 
          echo $feedback; 
      }
    }





    if(isset($_POST['deletePost'])) {  
      $feedback = $postIns->deletePost($_GET['id']); 
      if($feedback === true) { 
        $logIns->setTitle("Post verwijderd");  
        $logIns->setBody("De gebruiker heeft een post verwijderd");
        $logIns->setDescription("De gebruiker heeft een post verwijderd");   
        $logIns->setThreatlevel(3);
        $logIns->addLog($_SESSION['id']);  
      
        header("refresh:1.5;url=posts.php?page=1"); 
        echo "Je post is verwijderd";
       exit; 

      } else { 
        echo $feedback;
      }
       }  
    
   










?> 