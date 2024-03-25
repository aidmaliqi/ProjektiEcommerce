
    <?php
    $page="Admin Panel";
    include '../includes/incHeader.php';
    include '../CRUD/model.php'; ?>
    <style>
        #tg{
            display:flex;

        }
        .box{
            width:200px;
            height:200px;
            border: solid #07484a;
            border-radius:20px;
        }
        #container{
            width:80vw;
            height:50vh;
            display:flex;
            justify-content:space-around;
            align-items:center;
        }
        .info{
            display:flex;
            flex-direction:column;
            justify-content:space-around;
            height:200px;
            color:#07484a;
            text-align:center;
        }
    </style>
    <div id="tg">
    <?php include '../includes/sidemenu.php'; 
          $model = new Model();
          $model->count('user');
          if (!(isset($_SESSION['admin'])&&$_SESSION['admin']==true)) {
            echo "<script>alert ('U are not logged in') </script>";
            echo "<script>window.location.href='../pages/login.php';</script>";
          }
          
    ?>
        <div id="container">
        <div class="box">
            <div class="info">
                <h2>Users</h2>
                <h2>
                   <?php
                    echo $model->count('user');
                   ?>
                </h2>
                
            </div>
        </div>
        <div class="box">
        <div class="info">
                <h2>Messages</h2>
                <h2> <?php
                    echo $model->count('messages');
                   ?>
                   </h2>
            </div>
        </div>
        <div class="box">
        <div class="info">
                <h2>Products</h2>
                <h2> <?php
                    echo $model->count('product');
                   ?>
                   </h2>
            </div>
        </div>
        <div class="box">
        <div class="info">
                <h2>Orders</h2>
                <h2> <?php
                    echo $model->count('orders');
                   ?>
                   </h2>
            </div>
        </div>
        </div>
    </div>