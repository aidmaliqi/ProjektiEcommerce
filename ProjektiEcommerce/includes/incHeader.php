<style>
    #header{
        height: 50px;
        display:flex;
        justify-content:space-around;
        align-items:center;
    }
    #useri{
        text-align:center;
        width:300px;
    }
    h1{
        width:850px;
        display:flex;
        justify-content:flex-end;
    }
    </style>
<div id="header">
        <h1><?php echo $page?></h1>
        <div id="useri">
    <?php
        session_start();
         if(isset($_SESSION["admin"])&&$_SESSION['admin']==true){
            $email = $_SESSION['email'];
            echo "<p>$email</p>";
         }
    ?>
        
        <a href="../pages/logout.php">Log out</a>
        </div>
    </div>
    <hr>