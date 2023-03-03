if(isset($_POST['insert_cart'])){
  $category=$_POST['cart_title'];

  //sql query
  $sql="insert into categories(category_title)values('$category')";
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