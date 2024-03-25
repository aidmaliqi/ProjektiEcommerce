<?php
    $page="Manage your Products";
    include '../includes/incHeader.php';?>
    <style>
        #tg{
        display: flex;
        }
        #buttoni{

            height: 25px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: lightgray;
        }
        #produkt{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            margin-left: 5px;
        }
        .produkti{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: solid #07484a;
            margin-top: 5px;
            padding: 5px;
            flex-wrap: wrap;
            width: 390px;
        }
       
        #fotoja{
            width: 200px;
            height: 200px;
        }
        h2{
            text-align: center;
        }
    </style>
 <div id="tg">
        <?php include '../includes/sidemenu.php';
              include '../CRUD/model.php'; ?>
               
               <br>
               <div id="produkt">
               <a id="buttoni" href="insert.php">Insert</a>
               <?php
                $model = new Model();
                $products = $model->fetch('product');
                if($products==''){
                    echo '<h2>No products</h2>';
                }else{
                foreach ($products as $product) {
                    echo "<div class='produkti'>";
                    echo "<h3>ID: {$product['ID']}</h3>";
                    echo "<h3>{$product['Title']}</h3>";
                    echo "<img id='fotoja' src='../images/{$product['Image']}' alt='Product Image'>";
                    echo "<h3>Price: {$product['Price']}</h3>";
                    echo "<h3>Description:</h3>";
                    echo "<p>{$product['Description']}</p>";
                    ?>
                   <a href="edit.php?table='product'&id=<?php echo $product['ID']; ?>" id="edit">Edit</a>
                    <a href="delete.php?table='product'&id=<?php echo $product['ID']; ?>" id="delete">Delete</a>
                    <?php
                    echo "</div>";
                }
            }
            ?>
               </div>
            </div>
        