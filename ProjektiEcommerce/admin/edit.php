
<style>
    div{
        border: solid #07484a;
        width: 500px;
        margin: 0 auto;
        text-align: center;

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
    #desc{
        height: 100px;
    }
</style>
<?php
    include("../CRUD/productCrud.php");
    $prod=new productCrud();
    $id = $_GET['id'];
    $row=$prod->edit($id);

if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $image = $_POST['image'];
        $price= $_POST['price'];
        $description = $_POST['description'];
                if (!empty($title) && !empty($image) && !empty($price) && !empty($description)) {
                    $data['id'] = $id;
                    $prod->setTitle($title);
                    $prod->setImage($image);
                    $prod->setPrice($price);
                    $prod->setDescription($description);
                     
 
                    $update = $prod->update($id);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'admin.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'admin.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?table='product'&id=$id");
                  }
                }
          ?>
<div>
    <h1>Edit Product</h1>
<form action="" method="Post">
    <label for="">Title:</label>
    <input type="text" name="title" id="" value="<?php echo $row['Title']?>">
    <label for="">Image:</label>
    <input type="file" name="image" id="">
    <input type="text" name="image_name" value="<?php echo $row['Image'] ?>" disabled>
    <label for="">Price:</label>
    <input type="text" name="price" id="" value="<?php echo $row['Price']?>">
    <label for="">Description:</label>
    <input type="text" name='description'value="<?php echo $row['Description']?>">
    <input type="submit" name="update" value="Update">
</form>
</div>