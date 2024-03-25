<?php 
    include '../CRUD/model.php';
    $model = new Model();
    $table = str_replace("'", "", $_GET['table']);
    $id = $_GET['id'];
    
    $delete = $model->delete($table,$id);
    
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
    }else{
        echo "<script>alert('delete failed');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
    }
 ?>