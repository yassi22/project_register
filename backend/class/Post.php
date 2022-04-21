<?php 

   require_once 'Dbconfig.php';  
   
   class Post extends DbConfig { 
   
   private $titleBool; 
   private $desBool; 
   

   /*
   @param mixed $id
   @param mixed $title
   @param mixed $des
   @return true|string|void
*/

      public function updatePost(int $id, string $title, $des){
         
      try{ 
      $post = $this->getPost($id); 
      $sql = "UPDATE posts SET"; 

      if(!empty($title) && $post->title != $title){  
         $this->titleBool = true; 
         $sql = $sql . " title = :title"; 
      }
      
      if($post->description != $des ) {  
         if($this->titleBool) { 
            $sql = $sql . ","; 
         } 

         
         $this->desBool = true; 
         $sql = $sql . " description = :des"; 
         
      } 


 

   $sql = $sql . " WHERE id = :id";  
      $stmt = $this->connect()->prepare($sql); 
      $stmt->bindParam(":id", $id);  
      if($this->titleBool)
      $stmt->bindParam(":title", $title);  
      if($this->desBool)
      $stmt->bindParam(":des", $des); 
      
      if($stmt->execute()){ 
         //header("Location: posts.php?page=1"); 
         return true;
      } else { 
         throw new Exception("Onderdelen van de ingevoerde data was niet correct ");
      }


 }catch(Exception $e){ 
    return $e->getMessage();
 }
 
 } 

 
 public function deletePost($id){
     $sql = "DELETE FROM posts WHERE id = :id";
     $stmt = $this->connect()->prepare($sql); 
     $stmt->bindParam(':id', $id); 
     if($stmt->execute()){ 
       // header("Location: posts.php"); 
        return true;
     } else { 
       header("Location: post.php?id=$id");
     }
     
 } 
 
      public function getAllPost(){
       $sql = "SELECT * FROM projecten";
       $stmt = $this->connect()->prepare($sql);  
       $stmt->execute();  
       return $stmt->fetchAll(PDO::FETCH_OBJ);    
 }


     public function getPost($id)
   { 
      $this->updateView($id);

      $sql = "SELECT * FROM projecten WHERE project_id = :id";
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
   }


   public function getPopulairPosts()
   {
      $sql = "SELECT * FROM projecten ORDER BY views DESC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }



   public function getAlphaPost()
   {
      $sql = "SELECT * FROM projecten ORDER BY projectnaam ASC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

   public function getRecentPost()  
   {
      $sql = "SELECT * FROM projecten ORDER BY created_on DESC";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }




   public function getDefault()
   {
      $sql = "SELECT * FROM posts";
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

 



   public function getPostUser($page, $id ){
      if($page > 1){$page -= 1; $offset = $page * 6;}else{$offset = 0;} 
      $sql = "SELECT * FROM posts WHERE user_id = :id ORDER BY created_on DESC LIMIT 7 OFFSET $offset";  
      $stmt = $this->connect()->prepare($sql);   
      $stmt->bindParam(":id", $id);
      $stmt->execute();  
      return $stmt->fetchAll(PDO::FETCH_OBJ);  
}


 public function addPost($title,$des,$id){  
   try{ 
     $sql = "INSERT INTO posts (title, author ,description,user_id)
      VALUES (:title,:username ,:des, :id)" ;
     $stmt = $this->connect()->prepare($sql); 
     $stmt->bindParam(":title", $title);   
     $stmt->bindParam(":des", $des);  
     $stmt->bindParam(":username", $_SESSION['username']);      
     $stmt->bindParam(":id", $_SESSION['id']);     
     if($stmt->execute()){ 
       // header("Location: posts.php?page=1"); 
       return true; 

     } else { 
        throw new Exception("Er ontstond een fout tijdens het maken van een post ");
     }
     
     
      }catch(Exception $e){ 
         return $e->getMessage();
      }
      
      }  


      public function getTotalPosts($id) 
    {   
       
        $sql = "SELECT count(*) as count FROM posts WHERE user_id = :id ";  
        $stmt = $this->connect()->prepare($sql); 
        $stmt->bindParam(":id", $id);    
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ); 
         if($result == true) { 
         return ceil($result->count / 7 );  
         } else { 
             return $result = 0;  
         } 

    }
  
    public function getallPosts() 
    {   
        $sql = "SELECT count(*) as count FROM posts ORDER BY created_on DESC LIMIT 7  ";  
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ); 
         if($result == true) { 
         return ceil($result->count / 7 );  
         } else { 
             return $result = 0;  
         } 

    } 


 






 }
