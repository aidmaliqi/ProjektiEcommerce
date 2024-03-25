<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Log-in</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    @media (max-width:768px){
        .log{
            width: 300px;
            height: 500px;
        }
    }
</style>
<body>
<?php
        $page='login';
        include "../includes/header.php";
        include "../CRUD/userCrud.php";
        $user= new userCrud();
       
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($user->checkAdmin($email, $password)) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['admin']=true;
            header("Location: ../admin/admin.php");
        }
        
        if($user->checkUser($email, $password)){
            session_start();
            $_SESSION['email'] = $email;
            setcookie('logged_in',true, time() + 1800, '/');
            header("Location: ../index.php");
            //echo "Login failed. Incorrect email or password.";
        }
    }
    ?>
     <hr>
     <form action="" method="post">
    <div class="log">
        <h1>Log in</h1>
        <p>Login via Email</p>
        <p>Email:</p>
        <input type="email" name="email" id="Lemail" placeholder="Enter your Email">
        
        <p>Password:</p>
        <input type="password" name="password" id="Lpassword" placeholder="Enter your Password">
    
        <br>
        <button name='submit' onclick="login()">Login</button>
        <p>Not a member? <a href="register.php" style="color:black;">Sign Up</a></p>
    </div>
    </form>
    <?php
        include "../includes/footer.php";
    ?>
    <script src="../javascript/login.js"></script>
</body>
</html>