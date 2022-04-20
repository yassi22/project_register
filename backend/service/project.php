<?php 

//require_once '../partial/header.php'; 
require_once '../autoloader.php'; 
 

$posts = $postIns->getPost($_GET['id']);

if($posts->user_id != $_SESSION['id'] && $_SESSION['userright'] == 0){ 
  header("Location: postsUser.php?page=1&filter=id"); 

}
 







?>  



<main> 
<section class= "form">  
<?php require_once '../handler/postHandler.php'; ?>    
  <form method= "POST"> 
  <label for="created_on" id="created_on"> Created_on: </label>  <br><br>
   <label for="created_on" name="created_on"> <?php echo $posts->created_on ?> </label>  <br><br> 
   <label for="updated_on" id="updated_on"> Updated_on: </label>  <br><br>
   <label for="created_on" name="created_on"> <?php echo $posts->created_on ?> </label>  <br><br>  
   <label for="views" id="views"> Views: </label>  <br><br>
   <label for="views" name="views"> <?php echo $posts->views ?> </label>  <br><br>
   <label for="author" id="author"> Author: </label>  
   <label for="author" name="author"> <?php echo $posts->author ?> </label>  <br><br>
   <label for="title" id="title"> Title: </label> <br><br>
   <input type="text" name="title" value = "<?php echo $posts->title ?>"required ><br>
   <label for="text" > Description: </label><br> <br> 
   <textarea name="description"><?php echo $posts->description ?> </textarea><br> <br> 
   <input type="submit" name="updatePost" value="Update post"> <br>
   <input type="submit" name="deletePost" value="Delete post"> 
   </form>

   
</section> 
</main>





<?php 

//require_once '../partial/footer.php'; 

?> 