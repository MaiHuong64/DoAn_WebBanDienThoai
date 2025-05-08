<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/sanphammoi.css">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"></div>
            
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </div>

            <div class="user">
                <i class="fa-solid fa-circle-user"></i>
            </div>

            <div class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            
        </div>
        <div class="menu">
            <ul class="menu-list">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Danh mục</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Giới thiệu</a></li>
            </ul>
        </div>  

        
        <!-- main content -->
        <div id="content">
            <!-- banner -->
            <div class="owl-carousel owl-theme"> 
                <div class="item"><img src="../banner/banner3.png" alt=""></div>
                <div class="item"><img src="../banner/banner1.png" alt=""></div>
                <div class="item"><img src="../banner/banner2.png" alt=""></div>
                <div class="item"><img src="../banner/banner3.png" alt=""></div>
                <div class="item"><img src="../banner/banner4.png" alt=""></div>
                <div class="item"><img src="../banner/banner5.png" alt=""></div>
                <div class="item"><img src="../banner/banner6.png" alt=""></div>
                <div class="item"><img src="../banner/banner7.png" alt=""></div>
                <div class="item"><img src="../banner/banner8.png" alt=""></div>
                <div class="item"><img src="../banner/banner9.png" alt=""></div>
            </div>

            <div class="new_product">
                <?php
                    include("../includes/SanPhamMoi.php");
                ?>
            </div>

            <div class="container-">
                
            </div>

            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../Script/index.js"></script>
</body>
</html>