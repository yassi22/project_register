<?php 
//require_once '../partial/header.php'; 
require_once '../autoloader.php';   
  
  
 
?> 
 



<main>  
<br> 
<h2> Alle Posts </h2>
<?php foreach($postIns->getAllPost($_GET['page']) as $posts) { ?>
<a class="post-pagina" href="Post.php?id=<?php echo $posts->id ?>"> <?php echo $posts->title;?>  </a> <br>
<?php } ?> 


<br> 
 

<section class = "controlpage" > 
    <?php if($_GET['page'] > 0){?>
    <a href="posts.php?page=<?=$_GET['page']-1?>">< Prev </a> 
    <?php }?>   
    - 
    <?php if($_GET['page'] < $postIns->getallPosts($_GET['page'])){?>
    <a href="posts.php?page=<?=$_GET['page']+1?>">Next ></a> 
    <?php }?>   
</section>

 

</main>


 

<?php 
 
//require_once '../partial/footer.php'; 
 
?> 
