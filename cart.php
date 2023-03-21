<!--connect file-->
<?php
include('includes/connect.php');
include('admin_area/functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce-cart details </title>
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/4b57ca4420.js" crossorigin="anonymous"></script>
     <!---Css-->
    <link rel="stylesheet" href="style.css">
    <style>
      .Cart_img{
    width: 80px;
    height: 80px;
}
      </style>
    </head>
<body>
<!---navbar-->
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php
          cart_item();?></sup></a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <input type="submit" value="search" class="btn btn-outline-light"
       name="search_data_product">

      </form>
    </div>
  </div>
</nav>
</div>
<!--calling function-->
<?php
cart();
?>
<!---Second part--->
<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
</nav>
<!---third--->
<div class="bg-light">
  <h3 class="text-center">Store</h3>
  <p class="text-center">Communication is the heart of E-commerce and community</p>
</div>
<!--fourth child table-->
<div class="container">
  <div class="row">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Product Title</th>
          <th>Product Image</th>
          <th>Quantity</th>
          <th>Total price</th>
          <th>Remove</th>
          <th colspan="2">Operations</th>
        </tr>
      </thead>
      <tbody>
        <!--php code to display dynamic data-->
        <?php
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
          $product_price=$row_product_price['product_price'];
          $Produc_title=$row_product_price['product_title'];
          $price_image1=$row_product_price['product_image1'];
          $product_values=array_sum($product_price);
          $total_price+=$product_values;
        
        ?>
        <tr>
        <td><?php ?></td>
        <td><img src="./images/dairy.png" alt="" class="Cart_img"></td>
        <td><input type="text"></td>
        <td>9000</td>
        <td><input type="Checkbox"></td>
        <td>
         <button class="bg-info px-3 py-2 border-0 mx-3">update</button>
         <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>
        </td>
        </tr>
        <?php
      }
   }
          ?>
      </tbody>
    </table>
    <!--Total-->
    <div class="d-flex mb-5">
      <h4 class="px-3">Total:<strong class="text-info">5000/-</strong></h4>
    <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue shopping</button></a>
    <a href="#"><button class="bg-secondary px-3 py-2 border-0 text-light">Check out</button></a>

  </div>
  </div>
</div>

<!---footer-->
<!--include footer-->
<?php include("footer.php") ?>
<!---bootstrap js link---> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>