<?php
        require_once("../CRUD/model.php");
        $model = new Model();
        $page = $model->fetch('page');

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
     @media (max-width:768px){
        #AbUs{
            flex-wrap: wrap;
            margin-left: -100px;
        }
        #AbUs img{
            width: 400px;
        } 
        #content{
         padding: 0;
         border: none;
        }
     }
</style>
<body>
    <?php
        include "../includes/header.php";
    ?>
    <hr>
    <div id="AbUs">
        <img src="../images/store.jpg">
        <div id="content">
        <h1><?php echo $page[0]['About'] ?></h1>
        <p id="textP"><?php echo $page[0]['Description'] ?></p>
        <a href=""><?php echo $page[0]['Email'] ?></a>
        <a href=""><?php echo $page[0]['Tel'] ?></a>
        <p><?php echo $page[0]['StreetName'] ?></p>
    </div>
    </div>
    <?php
        include "../includes/footer.php";
    ?>
</body>
</html>