<?php
    require_once("dbcon.php");

    class orderCrud extends dbCon{
        private $idUser;
        private $idProd;
        private $ContactName;
        private $Country;
        private $StreetAdr;
        private $Apartament;
        private $City;
        private $Zipcode;
        private $Tel;
        private $DateTime;

        private $conn;

        public function __construct($idUser='',$idProd='',$ContactName='',$Country='',$StreetAdr='',$Apartament='',$City='',$Zipcode='',$Tel='',$DateTime=''){
            $this->idUser=$idUser;
            $this->idProd=$idProd;
            $this->ContactName=$ContactName;
            $this->Country=$Country;
            $this->StreetAdr=$StreetAdr;
            $this->Apartament=$Apartament;
            $this->City=$City;
            $this->Zipcode=$Zipcode;
            $this->Tel=$Tel;
            $this->DateTime=$DateTime;

            $this->conn=$this->connDB();
        }
        public function getIdUser() {
            return $this->idUser;
        }
    
        public function setIdUser($idUser) {
            $this->idUser = $idUser;
        }
    
        public function getIdProd() {
            return $this->idProd;
        }
    
        public function setIdProd($idProd) {
            $this->idProd = $idProd;
        }
    
        public function getContactName() {
            return $this->ContactName;
        }
    
        public function setContactName($ContactName) {
            $this->ContactName = $ContactName;
        }
    
        public function getCountry() {
            return $this->Country;
        }
    
        public function setCountry($Country) {
            $this->Country = $Country;
        }
    
        public function getStreetAdr() {
            return $this->StreetAdr;
        }
    
        public function setStreetAdr($StreetAdr) {
            $this->StreetAdr = $StreetAdr;
        }
    
        public function getApartament() {
            return $this->Apartament;
        }
    
        public function setApartament($Apartament) {
            $this->Apartament = $Apartament;
        }
    
        public function getCity() {
            return $this->City;
        }
    
        public function setCity($City) {
            $this->City = $City;
        }
    
        public function getZipcode() {
            return $this->Zipcode;
        }
    
        public function setZipcode($Zipcode) {
            $this->Zipcode = $Zipcode;
        }
    
        public function getTel() {
            return $this->Tel;
        }
    
        public function setTel($Tel) {
            $this->Tel = $Tel;
        }
    
        public function getDateTime() {
            return $this->DateTime;
        }
    
        public function setDateTime($DateTime) {
            $this->DateTime = $DateTime;
        }

        public function makeOrder(){
            $sql = "INSERT INTO orders (ID_User,ID_Prod,ContactName,Country,StreetAdr,Apartament,City,Zipcode,Tel,DateTime)
            values('$this->idUser','$this->idProd','$this->ContactName','$this->Country','$this->StreetAdr','$this->Apartament','$this->City','$this->Zipcode','$this->Tel','$this->DateTime'); ";
            if ($s=$this->conn->query($sql)){
            echo "<script>alert('Order made succesfully');</script>";
            echo "<script>window.location.href='../index.php';</script>";
            }else{
            echo "<script>alert('Something failed');</script>";
            echo "<script>window.location.href='../index.php';</script>";
            }
        }
        public function fetchOrder(){
            $data = null;
            //from newest to oldest
            $query = "SELECT * FROM orders order by DateTime desc" ;
            if($sql=$this->conn->query($query)){
                while($row=mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
            return $data;
         }
         public function fetchProductName($id){
            $title = null;
            $query = "SELECT product.Title FROM product WHERE product.ID = $id LIMIT 1";
            if ($sql = $this->conn->query($query)) {
                if ($row = mysqli_fetch_assoc($sql)) {
                    $title = $row['Title'];
                }
            }
            return $title;
        }


    }


?>