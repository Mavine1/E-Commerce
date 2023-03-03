<?php
include('../includes/connect.php');
if(isset($_POST['insert_cart'])){
  $category=$_POST['cart_title'];

  //sql query
  $sql="insert into categories SET
   	Category_title=$category";
    //execute query
    $res=mysqli_query($con,$sql);
    if($res==true){
      //inserted
      echo "inserted";
    }else{
      //not inserted
      echo "Failed to insert";
    }
    
}
?>


<form action="#" method="POST" class="mb-2">
<div class="input-group w-90  mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cart_title"placeholder="insert categories" aria-label="categories"
   aria-describedby="basic-addon1">
</div>
<div class="input-group w-10  mb-2 m-auto">
 
 <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cart"
  value="insert categories" > 
  
</div>
</form>