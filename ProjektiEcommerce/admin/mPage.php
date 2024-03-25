<style>
    #tg{
        display: flex;
    }
    #edit-page{
        border: solid #07484a;
        width: 500px;
        margin: 0 auto;
        text-align: center;
        padding: 5px;
    }
    form{
        display: flex;
        flex-direction: column;
    }
    input{
        width: 250px;
        text-align: center;
        margin:0 auto;
        margin-top: 10px;
    }
    .desc{
        height: 100px;
        width: 250px;
        text-align: center;
        margin:0 auto;
        margin-top: 10px;
    }
</style>

<?php
    $page="Edit your Page";
    include '../includes/incHeader.php';
    ?>
<div id="content">
 <div id="tg">
        <?php include '../includes/sidemenu.php';
              include '../CRUD/pageCrud.php'; 
              $page = new pageCrud();
              $row = $page->fetch();

              if(isset($_POST['submit'])){
                $title=$_POST['title'];
                $about=$_POST['about'];
                $country=$_POST['country'];
                $streetname=$_POST['streetname'];
                $email=$_POST['email'];
                $tel=$_POST['tel'];
                $description=$_POST['description'];

                //Validation....
                $page->setTitle($title);
                $page->setAbout($about);
                $page->setCountry($country);
                $page->setStreetname($streetname);
                $page->setEmail($email);
                $page->setTel($tel);
                $page->setDescription($description);

                
                $update = $page->update();
 
                if($update){
                  echo "<script>alert('Page edited successfully');</script>";
                  echo "<script>window.location.href = 'admin.php';</script>";
                }else{
                  echo "<script>alert('Update failed');</script>";
                  echo "<script>window.location.href = 'admin.php';</script>";
                }

              }
              
              ?>
              <div id="edit-page">
                    <h2>Page info</h2>
                    <div id="inputs">
                    <form action="" method="post">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" value='<?php echo $row['Title']; ?>'>
                        <label for="">About</label>
                        <textarea type="text" name="about" class='desc'><?php echo $row['About']; ?></textarea>
                        <label for="">Country</label>
                        <input type="text" name="country" id="" value='<?php echo $row['Country']; ?>'>
                        <label for="">Street Name</label>
                        <input type="text" name="streetname" id="" value='<?php echo $row['StreetName']; ?>'>
                        <label for="">Email</label>
                        <input type="text" name="email" id="" value='<?php echo $row['Email']; ?>'>
                        <label for="">Tel</label>
                        <input type="text" name="tel" id="" value='<?php echo $row['Tel']; ?>'>
                        <label for="">Description</label>
                        <textarea type="text" name="description" class='desc'><?php echo $row['Description']; ?></textarea>
                        <input type="submit" name="submit" value="Update">
                    </form>
                    </div>
              </div>
 </div>
</div>
              