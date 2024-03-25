<style>
    .ikonat{
        margin-top: 10px;
    }@media (max-width:768px){
        .ikonat{
            margin-left: 180px;
        }     

    }
</style>

<header>
    <div class="kategorite">
       
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <div class="ikonat">
        <?php
        if (isset($_COOKIE['logged_in'])&&$_COOKIE['logged_in']==true) {
            ?>
        <i>
            <a href="<?php echo '../pages/logout.php'; ?>">
                <img src="<?php echo '../images/logout.svg'; ?>">
                <br>
            </a>
        </i>
        <?php } else { 
                     ?>
            <i>
            <a href="<?php echo  '../pages/login.php'; ?>">
                <img src="<?php echo '../images/sign_in.png'; ?>">
                <br>
            </a>
        </i>
        <?php 
    } 
        ?>
    </div>
</header>