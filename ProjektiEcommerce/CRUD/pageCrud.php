<?php
    require_once("dbcon.php");
    class pageCrud extends dbCon{
        private $title;
        private $about;
        private $country;
        private $streetname;
        private $email;
        private $tel;
        private $description;
        private $conn;

        public function __construct($title='',$about='',$country='',$streetname='',$email='',$tel='',$description=''){
            $this->title=$title;
            $this->about=$about;
            $this->country=$country;
            $this->streetname=$streetname;
            $this->email=$email;
            $this->tel=$tel;
            $this->description=$description;

            $this->conn=$this->connDB();
        }
        public function getTitle() {
            return $this->title;
          }
          
          public function setTitle($title) {
            $this->title = $title;
          }
          
          public function getAbout() {
            return $this->about;
          }
          
          public function setAbout($about) {
            $this->about = $about;
          }
          
          public function getCountry() {
            return $this->country;
          }
          
          public function setCountry($country) {
            $this->country = $country;
          }
          
          public function getStreetname() {
            return $this->streetname;
          }
          
          public function setStreetname($streetname) {
            $this->streetname = $streetname;
          }
          
          public function getEmail() {
            return $this->email;
          }
          
          public function setEmail($email) {
            $this->email = $email;
          }
        
          public function getTel() {
            return $this->tel;
          }
          
          
          public function setTel($tel) {
            $this->tel = $tel;
          }
         
          public function getDescription() {
            return $this->description;
          }
          
         
          public function setDescription($description) {
            $this->description = $description;
          }
        public function fetch(){
            $data = null;
            $query = "SELECT * FROM page where ID=1";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
        public function update(){
            $query = "UPDATE page SET Title='$this->title', About='$this->about', Country='$this->country',StreetName='$this->streetname',Email='$this->email',Tel='$this->tel', Description='$this->description' WHERE id=1";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
?>