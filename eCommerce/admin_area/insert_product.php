<!DOCTYPE html>
<html lang="en">
<?php
    include("includes/db.php");
    ?>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Product</title>
</head>

<body bgcolor="#b2e6fc">
    <form action="insert_product.php" method="post"  enctype="multipart/form-data">
    <table align="center" width="700" border="1" bgcolor="lightblue" font-size="bold">
        <tr align="center">
            <td colspan="8">
                <h2>Insert New Product</h2>
            </td>
        </tr>
        <tr>
            <td align="right">Product Title:</td>
            <td><input name="product_title" size="60" required/></td>
        </tr>
        <tr>
            <td align="right">Product Category:</td>
            <td>
            <select type="text" name="product_category" required>
             <option>Select a Category</option>
                <?php
        $get_cats = "select * from categories";
        $run_cats = mysqli_query($con, $get_cats);
    
        while($row_cats = mysqli_fetch_array($run_cats)){
            $cat_id = $row_cats['cat_id'];
            $cat_title = $row_cats['cat_title'];
    
    echo "<option value='cat_id'>$cat_title</option>"; 
    };
    ?>
                </select>
                </td>
        </tr>
        <tr>
            <td align="right">Product Brand:</td>
            <td>
            <select name="product_brand" required >
             <option>Select a Brand</option>
                <?php
         $get_brands = "select * from brands";
    $run_brands = mysqli_query($con, $get_brands);
    
    while($row_brands = mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
    
    echo "<option value='$brand_id'>$brand_title</option>"; 
    };
    ?>
                </select>
                </td>
        </tr>
        <tr>
         <td align="right">Product Image:</td>
            <td><input type="file" name="product_image"/></td>
        </tr>
        <tr>
            <td align="right">Product Price:</td>
            <td><input type="text" name="product_price" required /></td>
        </tr>
        <tr>
            <td align="right">Product Description:</td>
            <td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td align="right">Product Keywords:</td>
            <td><input type="text" name="product_keywords" size="60"/></td>
        </tr>
        <tr align="center">
            <td colspan="8"><input type="submit" name="insert_post" value="Insert Product Now"/> 
            </td>
        </tr>

    </table>
    </form>
</body>
</html>
<?php

if(isset($_POST['insert_post'])){
    //getting text data 
   $product_title = $_POST['product_title'];
   $product_cat = $_POST['product_cat'];
   $product_brand = $_POST['product_brand'];
   $prodcut_price = $_POST['product_price'];
   $product_desc = $_POST['product_desc'];
   $prodcut_keywords = $_POST['product_keywords'];
    
    //get image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    
    move_uploaded_file($product_image_tmp, "product_images/$product_image");
    
   $insert_product ="insert into products (product_cat, product_brand, product_title product_price, product_desc, product_image, product_keywords) values ('$product_title','$product_cat','$product_brand','$product_price', '$product_desc', '$product_image','$product_keywords')";

   $insert_pro = mysqli_query($con, $insert_product);
    
    if($insert_pro){
        echo "<script>alert('Product added/inserted')</script>";
        echo "<script>window.open('insert_product.php', '_self')</script>";
    };
};
?>