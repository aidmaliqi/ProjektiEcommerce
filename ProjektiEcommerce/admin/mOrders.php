<style>
    #content{
        display: flex;
    }
    h2{
            text-align: center;
        }
       table,th,td{
        border: solid lightgray;
        text-align: center;
        
       }
       table{
        height: 100px;
       }
       th,td{
        height: 20px;
       }
       
</style>
<?php
    $page="Manage your Orders";
    include '../includes/incHeader.php';
    ?>
<div id="content">
 <div id="tg">
        <?php include '../includes/sidemenu.php';
              include '../CRUD/orderCrud.php'; 
              $ord = new orderCrud();
              $orders =$ord->fetchOrder();
              ?>
              </div>
              
              <?php
                    if($orders==''){
                        echo '<h2>No Orders</h2>';
                    }else{
                        ?>
                        <table>
                    <tr>
                        <th>Order ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>ContactName</th>
                        <th>Country</th>
                        <th>StreetAddress</th>
                        <th>Apartament</th>
                        <th>City</th>
                        <th>ZipCode</th>
                        <th>Tel</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <?php
                    foreach ($orders as $order) {
                      echo "<td>#{$order['ID']}</td>";
                      echo "<td>#{$order['ID_User']}</td>";
                      echo "<td>{$ord->fetchProductName($order['ID_Prod'])}</td>";
                      echo "<td>{$order['ContactName']}</td>";
                      echo "<td>{$order['Country']}</td>";
                      echo "<td>{$order['StreetAdr']}</td>";
                      echo "<td>{$order['Apartament']}</td>";
                      echo "<td>{$order['City']}</td>";
                      echo "<td>{$order['Zipcode']}</td>";
                      echo "<td>{$order['Tel']}</td>";
                      echo "<td>{$order['DateTime']}</td>";
                      echo "<td>";
                      echo      "<a href='delete.php?table=orders&id={$order['ID']} id='delete'>Delete</a>";
                      echo      "</td>";
                      echo      "</tr>";
                          
                        }
                    }
                        ?>
              </table>
</div>