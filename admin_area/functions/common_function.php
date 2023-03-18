<?php
//including connect file
include('./includes/connect.php');

//getting products
function getproducts(){
    global $con;
    //condition to check isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    $select_query="select * from products order by rand() limit 0,9";
      $result_query=mysqli_query($con,$select_query);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
      while($row_data=mysqli_fetch_assoc($result_query)){
        $Product_id=$row_data['Product_id'];
        $product_title=$row_data['product_title'];
        $product_description=$row_data['product_description'];
        $product_image1=$row_data['product_image1'];
        $product_price=$row_data['product_price'];
        $category_id=$row_data['category_id'];
        $brand_id=$row_data['brand_id'];
        echo "<div class='col md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <a href='#' class='btn btn-info'>add to cart</a>
          <a href='includes/product_details.php?Product_id=$Product_id' class='btn btn-secondary'>view more</a>
        </div>
      </div>
        </div >";
      }
}
}
}

//getting all products
function get_all_products(){
  global $con;
    //condition to check isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    $select_query="select * from products order by rand()";
      $result_query=mysqli_query($con,$select_query);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
      while($row_data=mysqli_fetch_assoc($result_query)){
        $product_id=$row_data['Product_id'];
        $product_title=$row_data['product_title'];
        $product_description=$row_data['product_description'];
        $product_image1=$row_data['product_image1'];
        $product_price=$row_data['product_price'];
        $category_id=$row_data['category_id'];
        $brand_id=$row_data['brand_id'];
        echo "<div class='col md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <a href='#' class='btn btn-info'>add to cart</a>
          <a href='/product_details.php?Product_id=$product_id' class='btn btn-secondary'>view more</a>
        </div>
      </div>
        </div >";
      }
}
}
}

// getting unique categories
function get_unique_categories(){
  global $con;
  //condition to check isset or not
  if(isset($_GET['category'])){
    $category_id=$_GET['category'];
  $select_query="select * from products where category_id=$category_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class = 'text-center text-danger'>Out of stock</h2>"; 
    }
    //$row_data=mysqli_fetch_assoc($result_brands);
    //echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_query)){
      $product_id=$row_data['Product_id'];
      $product_title=$row_data['product_title'];
      $product_description=$row_data['product_description'];
      $product_image1=$row_data['product_image1'];
      $product_price=$row_data['product_price'];
      $category_id=$row_data['category_id'];
      $brand_id=$row_data['brand_id'];
      echo "<div class='col md-4 mb-2'>
      <div class='card'>
      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <a href='#' class='btn btn-info'>add to cart</a>
        <a href='/product_details.php?Product_id=$product_id' class='btn btn-secondary'>view more</a>
        </div>
    </div>
      </div >";
    }
}
}

// getting unique brands
function get_unique_brands(){
  global $con;
  //condition to check isset or not
  if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
  $select_query="select * from products where brand_id=$brand_id";
    $result_query=mysqli_query($con,$select_query);
   
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class = 'text-center text-danger'>Out of stock</h2>"; 
    }
    //$row_data=mysqli_fetch_assoc($result_brands);
    //echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_query)){
      $product_id=$row_data['Product_id'];
      $product_title=$row_data['product_title'];
      $product_description=$row_data['product_description'];
      $product_image1=$row_data['product_image1'];
      $product_price=$row_data['product_price'];
      $category_id=$row_data['category_id'];
      $brand_id=$row_data['brand_id'];
      echo "<div class='col md-4 mb-2'>
      <div class='card'>
      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <a href='#' class='btn btn-info'>add to cart</a>
        <a href='/product_details.php?Product_id=$product_id' class='btn btn-secondary'>view more</a>
        </div>
    </div>
      </div >";
    }
}
}


//displaying brands
function getbrands(){
    global $con;
    $select_brands="select * from Brands";
      $result_brands=mysqli_query($con,$select_brands);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
      while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='nav-item '>
        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
      </li>";
      }
}

//display categories in sidenav

function getcategories(){
  global $con;
  $select_category="select * from categories";
  $result_category=mysqli_query($con,$select_category);
  //$row_data=mysqli_fetch_assoc($result_brands);
  //echo $row_data['brand_title'];
  while($row_data=mysqli_fetch_assoc($result_category)){
    $category_title=$row_data['category_title'];
    $Category_id=$row_data['Category_id'];
    echo "<li class='nav-item '>
    <a href='index.php?category=$Category_id' class='nav-link text-light'>$category_title</a>
  </li>";
  }
}

//searching products function
function search_data(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
  //condition to check isset or not
  $search_query="select * from products where product_keyword like 
  '%search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class = 'text-center text-danger'>product not found</h2>"; 
    }
    while($row_data=mysqli_fetch_assoc($result_query)){
      $product_id=$row_data['product_id'];
      $product_title=$row_data['product_title'];
      $product_description=$row_data['product_description'];
      $product_image1=$row_data['product_image1'];
      $product_price=$row_data['product_price'];
      $category_id=$row_data['category_id'];
      $brand_id=$row_data['brand_id'];
      echo "<div class='col md-4 mb-2'>
      <div class='card'>
      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <a href='#' class='btn btn-info'>add to cart</a>
        <a href='/product_details.php?Product_id=$product_id' class='btn btn-secondary'>view more</a>
        </div>
    </div>
      </div >

      <div class='col md 8'>
      <!--related data-->
      <div class='row'>
          <div class='col md 12'>
              <h4 class='text-center text-info mb-5'>
               Related products
              </h4>
          </div>
          <div class='col md 6'>
          <img src='./images/apple.png' class='card-img-top' 
          alt='$product_title'>
          </div>
          <div class='col md 6'>
          <img src='./images/apple.png' class='card-img-top' alt='$product_title'><img src='./images/apple.png' class='card-img-top'
           alt='$product_title'>
              </div>
      </div>
  </div>";
    }
}
}



//view details function
function view_details(){
  global $con;
    //condition to check isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $product_id=$_GET['product_id'];
    $select_query="select * from products where Products_id=$product_id";
      $result_query=mysqli_query($con,$select_query);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
      while($row_data=mysqli_fetch_assoc($result_query)){
        $Product_id=$row_data['Product_id'];
        $product_title=$row_data['product_title'];
        $product_description=$row_data['product_description'];
        $product_image1=$row_data['product_image1'];
        $product_image2=$row_data['product_image2'];
        $product_image3=$row_data['product_image3'];
        $product_price=$row_data['product_price'];
        $category_id=$row_data['category_id'];
        $brand_id=$row_data['brand_id'];
        echo "<div class='col md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <a href='#' class='btn btn-info'>add to cart</a>
          <a href='includes/product_details.php?product_id=$Product_id' class='btn btn-secondary'>view more</a>
        </div>
      </div>
        </div >
        <div class='col md 8'>
        <div class='row'>
            <div class='col md 12'>
                <h4 class='text-center text-info mb-5'>
                 Related products
                </h4>
            </div>
            <div class='col md 6'>
            <img src='./admin_area/product_images/$product_image2' class='card-img-top' 
            alt='$product_title'>
            </div>
            <div class='col md 6'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'><img src='./images/apple.png' class='card-img-top'
             alt='$product_title'>
                </div>
        </div>
    </div>";
      }
}
}
 }
}
//get ip function
function getIPAddress(){  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  
?>