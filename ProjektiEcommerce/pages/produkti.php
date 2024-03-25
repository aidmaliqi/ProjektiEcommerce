<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product's Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<style>
        @media (max-width:768px){
            #foto img{
                width: 300px;
            }
            #main{
                text-align: center;
                width: 350px;
                margin-right: 10px;
            }
            #main{
                margin-top: 50px;
            }

        }
</style>
<body >
<?php

        $page='produkti';
        include "../includes/header.php";
        include "../CRUD/model.php";
        include "../CRUD/productCrud.php";
       
        $model = new Model();
        $prod = new productCrud();
        
        $id = $_GET['pr'];
        $userID =null;
        if (isset($_COOKIE['logged_in'])&&$_COOKIE['logged_in']==true) {
            session_start();
            $userID = $model->getCustomerIdByEmail($_SESSION['email']);
        }
        $data=$prod->fetchProducts($id);
      //  var_dump($_SESSION);
        
    ?>
     <hr>
    <div id="main">
        <div id="foto">
            <img src="<?php echo "../images/{$data['Image']}";?>" alt="" id="fotoja">
        </div>
            <div id="desc">
            <h1 id="h1shi"><?php echo $data['Title']; ?></h1>
            <h3 id="h3shi"><?php echo $data['Price'];?>$</h3>
            <p id="paragrafi"><?php echo $data['Description'];?></p>
            <a href="order.php?userid=<?php echo $userID;?>&prodid=<?php echo $id;?>">
            <button>Order</button>
        </a>
            </div>
    </div>
    <?php
        include "../includes/footer.php";
    ?>
    <!-- <script src="../javascript/product.js"></script> -->
</body>
</html>