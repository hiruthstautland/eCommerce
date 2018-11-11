<?php
//1""=server name, 2""=username for datebase , 3""=password, 4""=database name

//Gettint the categories!
$con = mysqli_connect("localhost", "root", "mysql", "eCommerce");

function getCats(){

    global $con;
    $get_cats = "select * from categories";
    $run_cats = mysqli_query($con, $get_cats);
    
    while($row_cats = mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
    
    echo "<li><a href='#'>$cat_title</a></li>";
      
    };
      
    };

//Gettint the brands!
function getBrands(){

    global $con;
    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con, $get_brands);
    
    while($row_brands = mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
    
    echo "<li><a href='#'>$brand_title</a></li>";
      
    };
      
    };

?> 
