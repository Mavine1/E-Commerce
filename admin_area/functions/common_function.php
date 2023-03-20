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
          <p class='card-text'>Price: $product_price/=</p>
          <a href='index.php?add_to_cart=$Product_id' class='btn btn-info'>add to cart</a>
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
          <p class='card-text'>Price: $product_price/=</p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>add to cart</a>
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
        <p class='card-text'>Price: $product_price/=</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>add to cart</a>
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
        <p class='card-text'>Price: $product_price/=</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>add to cart</a>
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
        <p class='card-text'>Price: $product_price/=</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>add to cart</a>
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
          <p class='card-text'>Price: $product_price/=</p>
          <a href='index.php?add_to_cart=$Product_id' class='btn btn-info'>add to cart</a>
          <a href='index.php' class='btn btn-secondary'>Go home</a>
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

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $ip = getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="select * from cart_details where ip_address='$ip' and
  product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('This item is already present inside cart')</script>"; 
    echo"<script>window.open('index.php','_self')</script>";
}
else{
  $insert_query="insert into cart_details (Product_id,ip_address,quantity)
  values ($get_product_id,'$ip',0)";
  $result_query=mysqli_query($con,$insert_query);
  echo "<script>alert('Item added to cart')</script>"; 
  echo"<script>window.open('index.php','_self')</script>";
  
}
}
}
// function to get item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip = getIPAddress();
    $select_query="select * from cart_details where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
   }else{
    global $con;
    $ip = getIPAddress();
    $select_query="select * from cart_details where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    
  }
  echo $count_cart_items;
  }
  //total price function
  function total_cart_price(){
    global $con;
    $ip = getIPAddress();
    $total_price=0;
    $cart_query="select * from cart_details where ip_address='$ip'";
    $result_query=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result_query)){
      $product_id=$row['Product_id'];
      $select_product="select * from products where Product_id='$product_id'";
      $result_product=mysqli_query($con,$select_product);
      while($row_product_price=mysqli_fetch_array($result_product)){
      $product_price=array($row_product_price['product_price']);
      $product_values=array_sum($product_price);
      $total_price+=$product_values;
      }
    
    }
    echo $total_price;
  }
?>