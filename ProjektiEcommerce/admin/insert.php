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
        width: 240px;
        margin-left: 130px;
    }
</style>
<?php
    include("../CRUD/productCrud.php");
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $desc = $_POST['description'];

        $product=new productCrud();
        $product->setTitle($title);
        $product->setImage($image);
        $product->setPrice($price);
        $product->setDescription($desc);
        $product->insertProduct();
    }
?>
<div>
    <h1>Insert Product</h1>
<form action="" method="Post">
    <label for="">Title:</label>
    <input type="text" name="title" id="" placeholder="Title">
    <label for="">Image:</label>
    <input type="file" name="image" id="">
    <label for="">Price:</label>
    <input type="text" name="price" id="" placeholder="Price">
    <label for="">Description:</label>
    <textarea name='description' id="desc" placeholder="Description"></textarea>
    <input type="submit" name="submit" id="">
</form>
</div>