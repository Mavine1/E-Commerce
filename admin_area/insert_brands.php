<?php
include('../includes/connect.php');
if(isset($_POST['insert_brands'])){
  $brand_title=$_POST['brand_title'];
  //select data from the database//
  $select_query="select * from Brands where brand_title ='$brand_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
 if($number==TRUE){
    echo "<script>alert('Already exists in the database')</script>";
  }else{
  $insert_query="insert into Brands(brand_title) values ('$brand_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('brand has been inserted successfully')</script>";
  }
}}
?>

<h2 class="text-center">Insert brands </h2>

<form action="" method="POST" class="mb-2">
<div class="input-group w-90  mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title"placeholder="insert brands" aria-label="brands"
   aria-describedby="basic-addon1">
</div>
<div class="input-group w-10  mb-2 m-auto">
 
 <input type="submit" class="bg-info border-o p-2 my-3" name="insert_brands"
  value="insert Brands" >
  
</div>
</form>