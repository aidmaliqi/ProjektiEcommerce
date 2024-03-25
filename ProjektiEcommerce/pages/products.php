<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<style>
    @media (max-width:768px){
        .off{
            height: 250px;
        }
        main{
            margin-left: -20px;
        }
    }
    .produktet a{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
<?php
        $page='products';
        include "../includes/header.php";
        include "../CRUD/model.php";
        
        $model = new Model();
        $userID =null;
        if (isset($_COOKIE['logged_in'])&&$_COOKIE['logged_in']==true) {
            session_start();
            $userID = $model->getCustomerIdByEmail($_SESSION['email']);
        }
        $products = $model->fetch('product');
    ?>
     <hr>
     <div class="off">
        <p style="color: white;font-weight: lighter;">Thank you for considering purchasing from us. We offer high quality products at affordable prices and excellent customer service.<br> Our team is dedicated to ensuring that you have a seamless and enjoyable shopping experience. We offer a variety of payment options and fast, reliable shipping. <br>Don't miss out on the opportunity to get the best deal on the products you need. Shop with us today and see the difference for yourself!</p>
        <h2>Check some of our products below</h2>
     </div>
     <main >
        <?php
            foreach($products as $product){
           echo "<div class='produktet'>";
           echo "<a href='../pages/produkti.php?pr={$product['ID']}'> <img src='../images/{$product['Image']}' class='produkti'  style='cursor:pointer;'> </a>";
           echo "<h3>{$product['Title']}</h3>";
           echo "<h3>Price: {$product['Price']}$</h3>";
           echo "<a href='order.php?userid={$userID}&prodid={$product['ID']}'>
                 <button>Order</button> </a>";
        echo "</div>";
            }
            ?>
        <!-- <div class="produktet">
            <img src="../images/2.jpg" alt="" class="produkti" onclick="redirectTo(2)" style="cursor:pointer;">
            <h3>Luxury Memory Foam Mattress</h3>
            <h3>Price: 2000$</h3>
            <a href="order.php">
                <button>Order</button>
            </a>
        </div>
        <div class="produktet">
     
            <img src="../images/3.jpg" alt="" class="produkti" onclick="redirectTo(3)" style="cursor:pointer;">
        
            <h3>Contemporary Platform Bed</h3>
            <h3>Price: 1300$</h3>
            <a href="order.php">
                <button>Order</button>
            </a>
            
        </div>
        <div class="produktet">
            <img src="../images/4.jpg" alt="" class="produkti" onclick="redirectTo(4)" style="cursor:pointer;">
        
            <h3>Rustic Farmhouse Bed</h3>
            <h3>Price: 1350$</h3>
            <a href="order.php">
                <button>Order</button>
            </a>
            
        </div>
        
        <div class="produktet">
        
            <img src="../images/5.jpg" alt="" class="produkti" onclick="redirectTo(5)" style="cursor:pointer;">
        
            <h3>Orthopedic Memory Foam Mattress</h3>
            <h3>Price: 1450$</h3>
            <a href="order.php">
                <button>Order</button>
            </a>
           
        </div>
        <div class="produktet">
            
            <img src="../images/6.jpg" alt="" class="produkti" onclick="redirectTo(6)" style="cursor:pointer;">
        
            <h3>Hybrid Innerspring Mattress</h3>
            <h3>Price: 1150$</h3>
            <a href="order.php">
                <button>Order</button>
            </a>
           
        </div>
        <div class="produktet">
        
            <img src="../images/7.jpg" alt="" class="produkti" onclick="redirectTo(7)" style="cursor:pointer;">
        
            <h3>Wingback Armchair</h3>
            <h3>Price: 80$</h3>
            <a href="order.php">
                <button>Order</button>
            </a>
            
        </div>
        <div class="produktet">
        <img src="../images/8.jpg" alt="" class="produkti" onclick="redirectTo(8)" style="cursor:pointer;">
        
        <h3>Compact Armchair</h3>
        <h3>Price: 50$</h3>
        <a href="order.php">
            <button>Order</button>
        </a>
        -->
     </main>
     <?php
        include "../includes/footer.php";
    ?>
    <script src="../javascript/product.js"></script>
</body>
</html>