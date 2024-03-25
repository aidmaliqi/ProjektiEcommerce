<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<style>
    @media (max-width:768px){
        .log{
           margin-left: -5px;
        }
    }
</style>
<body>
<?php
        $page='register';
        include "../includes/header.php";
        include "../CRUD/userCrud.php";
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user = new userCrud();
            $user->setFirstName($fname);
            $user->setLastName($lname);
            $user->setUserName($username);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->insertUser();
            
        }
        
    ?>
     <hr>
     <form action="" method="POST">
     <div class="log">
        <h1 style="text-align: center;">Register</h1>
        <p style="text-align: center;">Fill out this form</p>
        <div id="info">
        <input type="text" name='fname' placeholder="First Name" name="" id="fname">
        <input type="text" name='lname' placeholder="Last Name" name="" id="lname">
        </div>
        <div id="info2">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="email" name='email' id="email" placeholder="Email">
        <input type="password" name='password' id="password" placeholder="Password">
    </div>
        <ul id="requirements">
            <li>Name and Last Name must have more than 2 characters</li>
            <li>Username must contains only letters and more than 6 characters</li>
            <li>Email must be valid</li>
            <li>Password must have more than 8 characters</li>
        </ul>
        <button name='submit' onclick="signUp()">Create account</button>
        
        <p>Already have an account? <a href="login.php" style="color:black;">Log in</a></p>
    </div>
    </form>
    <?php
        include "../includes/footer.php";
    ?>
    <script src="../javascript/register.js"></script>
</body>
</html>