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
    <title><?php echo $page[0]['Title']; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body onload="krijoSlider()">
    <?php
        include "../includes/header.php";
    ?>
    <div id="mbajtesi">
        <div id="contentMbajtesi">
            <h1 id="cH1">Exclusive Deals of Furniture Collection</h1>
            <p id="cP1" style="color: white;">Explore different categories. Find the best deals</p>
            <a href="products.php"><button id="shop">Shop Now</button></a>
        </div>
    </div>
    <hr>
    <h1 style="text-align: center; color:#07484a;">Enhancing your space, enhancing your life</h1>
    <div id="sale">
        <div class="box1">
            <img src="../images/2.jpg" alt="">
        </div>
        <div class="box1">
            <img src="../images/3.jpg" alt="">
        </div>
        <div class="box1">
            <img src="../images/4.jpg" alt="">
        </div>
    </div>
    <hr>
    <div id="para">
        <h3 style="color: black;">Your home is a reflection of who you are and what you value. Choose furniture that aligns with your personal style and creates a space that feels authentic and welcoming. Let us help you turn your house into a home you love.</h3>
    </div>
    <hr>

    <?php
        include "../includes/footer.php";
    ?>
    <script>
            var vargu = ['../images/bg.webp','../images/bg1.webp','../images/bg2.webp'];
            console.log(vargu);
            var i=0;
            const koha = 2500;
            elementi = document.getElementById('mbajtesi');
            elementi.style.transition = 'background 0.5s ease-in-out';
            function krijoSlider(){
                elementi.style.backgroundImage = `url(${vargu[i]})`;
                i++;
                if(i==vargu.length){
                    i=0;
                }
                setTimeout('krijoSlider()',koha);
            };
    </script>
</body>
</html>