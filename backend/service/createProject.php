<?php 
//require_once '../partial/header.php'; 
require_once '../autoloader.php';    

  

?>  


<main> 
<h2> Maak hier een post aan </h2>  
<br> 

<section class= "form">  
 <?php require_once '../handler/postHandler.php'; ?> 
  <form method= "POST"> 
   <label for="title" id="title"> Title: </label> 
   <input type="text" name="title" required><br> 
   <label for="text" > Description: </label><br>
   <textarea name="description">  </textarea><br>
   <input type="submit" name="addPost" value="Add post"> 
   </form>
 </section> 
</main>





<?php 

//require_once '../partial/footer.php'; 

?> 