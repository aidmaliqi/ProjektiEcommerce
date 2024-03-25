<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
         @media (max-width:768px){
            #ContactUs{
                flex-wrap: wrap;
            }
            #Map iframe{
              width: 400px;
            }

         }
</style>
<body>
<?php
        $page='contact';
        include "../includes/header.php";
        include "../CRUD/messagesCrud.php";
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message= $_POST['message'];

           

            $msg=new messagesCrud();
            $msg->setName($name);
            $msg->setEmail($email);
            $msg->setMessage($message);

            $msg->insertMessage();
        }
        
    ?>
     <hr>
    <!-- <div id="AbUs">
        <img style="width: 1000px;" src="/images/location.webp">
        <div id="content">
        <h1>Come and see us.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, mollitia consectetur minima quia culpa pariatur distinctio temporibus est tenetur eos nihil labore, libero atque facere adipisci dignissimos illo. Earum, non. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deserunt alias, exercitationem, amet necessitatibus esse velit nemo non eligendi consequuntur quas animi cum aspernatur enim suscipit! Consequatur assumenda esse quis?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, sequi velit. Sequi illum qui quae? Amet voluptatem explicabo soluta officiis. Deserunt iste id ducimus mollitia amet in unde repudiandae facere!Lorem</p>
        <h3>or Contact us at</h3>
        <a href="">email@email.com</a>
        <a href="">012345678</a>
        <p>877 The Bronx, NY 14568, USA</p>
    </div>
    </div> -->
    <!-- <div class="contactt">
        <h1>Come and see us</h1>
        <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d434178.5940098575!2d-2.9081931315399605!3d53.66242702223437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1670513523891!5m2!1sen!2s"
     width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <div class="contact">
        <a class="con"> Contact Us</a>
       <input type="text" placeholder=" Enter your name">
       <input type="email" placeholder="Enter your email">
       <input type="number" placeholder="Enter your number">
       <input type="textarea" placeholder="subject">
       <button class="lo" >Submit</button>
    </div> -->
    <div id="ContactUs">
        <div id="Map">
            <h2 style="text-align: center;">Come and see us</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d434178.5940098575!2d-2.9081931315399605!3d53.66242702223437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1670513523891!5m2!1sen!2s"
     width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <form action="" method="POST">
        <div id="information">
            <h2>Message us</h2>
            <div id="inner">
            <input type="text" name='name' id="name" placeholder=" Enter your name">
            <input type="email" name='email' id="email" placeholder="Enter your email">
            </div>
            <input type="textarea"name='message' id="c1" placeholder="Enter your message">
            <button id="send" name='submit' onclick="send()">Send</button>
        </div>
        </form>
    </div>
       


    </div>
    <?php
        include "../includes/footer.php";
    ?>

    <script src="../javascript/contact.js"></script>

</body>
</html>