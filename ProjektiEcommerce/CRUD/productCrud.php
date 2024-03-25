<?php
    require_once('dbcon.php');
    class productCrud extends dbCon{
        private $title;
        private $image;
        private $price;
        private $description;
        private $conn;

        public function __construct($title='',$image='',$price='',$description=''){
            $this->title=$title;
            $this->image=$image;
            $this->price=$price;
            $this->description=$description;

            $this->conn= $this->connDB();
        }
        public function getTitle() {
            return $this->title;
        }
    
        public function setTitle($title) {
            $this->title = $title;
        }
    
        public function getImage() {
            return $this->image;
        }
    
        public function setImage($image) {
            $this->image = $image;
        }
    
        public function getPrice() {
            return $this->price;
        }
    
        public function setPrice($price) {
            $this->price = $price;
        }
    
        public function getDescription() {
            return $this->description;
        }
    
        public function setDescription($description) {
            $this->description = $description;
        }
        public function insertProduct(){
            if(!(empty($this->title)||empty($this->image)||empty($this->price)||empty($this->description))){
            $sql = "INSERT INTO product (Title,Image,Price,Description)
                                    values('$this->title','$this->image','$this->price','$this->description');";
           if ($result = $this->conn->query($sql)) {
            echo "<script>alert('Product added succesfully');</script>";
            echo "<script>window.location.href='admin.php';</script>";
        }else{
            echo "<script>alert('Something failed');</script>";
            echo "<script>window.location.href='admin.php';</script>";
        }
    }else{
        echo "<script>alert('Empty fields!');</script>";
        echo "<script>window.location.href='admin.php';</script>";
        }
    }
    public function edit($id){
        $data = null;
        $query = "SELECT * FROM product WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }
    public function update($id){
        $query = "UPDATE product SET Title='$this->title', Image='$this->image', Price='$this->price', Description='$this->description' WHERE id='$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }
    public function fetchProducts($id){
        $data = null;
        $query = "SELECT * FROM product WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }
        
    }




?>