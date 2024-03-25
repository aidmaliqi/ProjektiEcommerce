<footer id="footer_file">
        
        <ul class="listatF">
        <?php 
             include("../CRUD/pageCrud.php");
             $pa = new pageCrud();
             $data = $pa->fetch();
            ?>
        <img src="../images/logo.png" style="height: 39px;width: 40px;" alt="">
        <li><?php echo $data['Email'];?></li>
        <li><?php echo $data['Tel'];?></li>
        <li><?php echo $data['StreetName'];?></li>
        <li><?php echo $data['Country'];?></li>
        </ul>
        <ul class="listatF">
            <h3>My account</h3>
            <li>
                <a href="../pages/login.php">Sign in</a>
            </li>
            <li>
                <a href="../pages/register.php">Register</a>
            </li>
        </ul>
        <ul class="listatF">
            <h3>Shop</h3>
            <li>
                <a href="../pages/products.php">All Products</a>
            </li>
        </ul>
        
    </footer>