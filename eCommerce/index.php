<!DOCTYPE html>
<html lang="en">
<?php include("functions/functions.php");  ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Online Butikk</title>
    <link rel="stylesheet" href="styles/style.css" media="all">
    
</head>
<body>
    <div class="main_wrapper">
        <div class="header_wrapper">
            <img id="banner" src="images/20180331_151120.jpg" alt="Madagascar beach">
        </div>
        <div class="menubar">
            <ul id="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">All Products</a></li>
                <li><a href="#">My account</a></li>
                <li><a href="#">Shopping Cart</a> </li>
                <li><a href="#">Sign Up/In</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <div id="form">
                <form method="get" action="results.php" enctype="multipart/form-data">
                 <input type="text" name="user_query" placeholder="Search" size="20px" />
                 <input type="submit" name="search" value="Search" />
                </form>
            </div>
        </div>
        <div class="content_wrapper">
            <div id="sidebar">
                <div id="sidebar_title">Categories</div>
                <ul id="cats">
                <?php getCats(); ?>
                </ul>
                <div id="sidebar_title">Brands</div>
                <ul id="cats">
                <?php getBrands(); ?>
                </ul>
            </div>
        </div>
        <div id="content_area">
            <div>
                <h1>Content_area</h1>
            </div>
            <div>
                <h1>Nettsted kommer snart!</h1>
            </div>
            <div>
                <h1>Nettsted kommer snart!</h1>
            </div>
            <div>
                <h1>Nettsted kommer snart!</h1>
            </div>
        </div>
    </div>
    <div id="footer">
       
        <h2>&copy;2018 Develop-IT bu <i>Hiruth Marie Stautland</i> </h2>
        
        
        
    </div>
</body>

</html>
