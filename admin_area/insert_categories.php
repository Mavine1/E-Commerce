<?php
include('../includes/connect.php');
if(isset($_POST['insert_cart'])){
  $category_title=$_POST['cat_title'];
  $insert_query="insert into 'categories' (category_title) ";
}

?>


<form action="" method="post" class="mb-2">
<div class="input-group w-90  mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title"placeholder="insert categories" aria-label="categories"
   aria-describedby="basic-addon1">
</div>
<div class="input-group w-10  mb-2 m-auto">
 
 <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat"
  value="insert categories" > 
  
</div>
</form>