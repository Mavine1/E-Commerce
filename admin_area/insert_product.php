<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products-Admin dashboard</title>
    <!--bootstrap and css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---fontawesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/4b57ca4420.js" crossorigin="anonymous"></script>
    <!---css-link-->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!---title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">product_title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                placeholder="Enter product title"autocomplete="off" required="required">
            </div>
            <!---description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">product description</label>
                <input type="text" name="description" id="description" class="form-control"
                placeholder="Enter description"autocomplete="off" required="required">
            </div>
            <!--keyword-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keyword" class="form-label">product keyword</label>
                <input type="text" name="keyword" id="keyword" class="form-control"
                placeholder="keyword"autocomplete="off" required="required">
            </div>
            <!---categories-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">select category</option>
                    <?php
                   $select_category="select * from categories";
                   $result_category=mysqli_query($con,$select_category);
                   //$row_data=mysqli_fetch_assoc($result_brands);
                   //echo $row_data['brand_title'];
                   while($row_data=mysqli_fetch_assoc($result_category)){
                     $category_title=$row_data['category_title'];
                     $Category_id=$row_data['Category_id'];
                     echo "<option value=' $Category_id'>$category_title</option>";
                   }
                    ?>
                </select>
            </div>
            <!---brands-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">select Brands</option>
                    <?php
                   $select_brand="select * from brands";
                   $result_brand=mysqli_query($con,$select_brand);
                   //$row_data=mysqli_fetch_assoc($result_brands);
                   //echo $row_data['brand_title'];
                   while($row_data=mysqli_fetch_assoc($result_)){
                     $brand_title=$row_data['brand_title'];
                     $brand_id=$row_data['brand_id'];
                     echo "<option value=' $brand_id'>$brand_title</option>";
                   }
                    ?>
                </select>
            </div>
            <!--image -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">product image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"
                placeholder="keyword"autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">product image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"
                placeholder="keyword"autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">product image3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"
                placeholder="keyword"autocomplete="off" required="required">
            </div>
            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_price" class="form-label">product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="price"autocomplete="off" required="required">
            </div>
            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit"name="insert_products"class="btn btn-info mb-3 px-3" value="insert_products">
            </div>
        </form>
    </div>
    
</body>
</html>