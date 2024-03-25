<?php
  Class dbCon{
    private $server='localhost';
    private $username='root';
    private $password='';
    private $database='ecommerce';
    private $conn;
  
     
         public function connDB(){
          
            try{
                $this->conn = new mysqli($this->server,$this->username,$this->password,$this->database);
            }catch(Exception $e){
                echo 'Connection failed'. $e->getMessage();
            }
          return $this->conn;
    }
}

?>
