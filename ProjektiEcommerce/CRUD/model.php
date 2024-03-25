<?php
    require_once("dbcon.php");
class Model extends dbCon{
        private $conn;

        public function __construct(){
            $this->conn=$this->connDB();
         }
         public function fetch($table){
            $data = null;
            $query = "SELECT * FROM $table order by ID desc" ;
            if($sql=$this->conn->query($query)){
                while($row=mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
            return $data;
         }
        
         public function getCustomerIdByEmail($email) {
            $customerId = null;
            $query = "SELECT ID FROM user WHERE Email = '$email'";
        
            if ($result = $this->conn->query($query)) {
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $customerId = $row['ID'];
                }
                $result->close();
            }
            return $customerId;
        }
        
         public function delete($table,$id){
            $query = "DELETE FROM $table where ID = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
     
        public function count($table){
            $query = "SELECT COUNT(*) FROM $table";
            $result = $this->conn->query($query);
            return mysqli_fetch_assoc($result)["COUNT(*)"];
        }
        

     }
     ?>