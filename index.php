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
    <title>E commerce </title>
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/4b57ca4420.js" crossorigin="anonymous"></script>
     <!---Css-->
    <link rel="stylesheet" href="style.css">
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
          <li class="nav-item">
          <a class="nav-link" href="#"> total price: <?php total_cart_price();?>/-</a>
        </li>
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
<!--fourth-->
<div class="row px-1">
  <div class="col md-10">
    <!--products-->
<div class="row">
   <!--fetching data-->

   <?php
      getproducts();
      get_unique_categories();
      get_unique_brands();
      //$ip = getIPAddress();  
     //echo 'User Real IP Address - '.$ip;  
      ?>
  <!--row-->
  </div>
  <!--col end-->
</div>

  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>

      <!--fetching data-->

      <?php
      getbrands();
      ?>
    </ul>
  <!------categories--->
  <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>

      <!--fetching of data from the database-->
      <?php
      getcategories();
      ?>
    </ul>
</div>
<!---footer-->
<!--include footer-->
<?php include("footer.php") ?>
<!---bootstrap js link---> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>