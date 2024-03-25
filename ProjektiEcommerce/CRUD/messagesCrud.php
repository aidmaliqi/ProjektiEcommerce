<?php
    require_once("dbcon.php");

    class messagesCrud extends dbCon{
        private $name;
        private $email;
        private $message;
        private $conn;
        public function __construct($name='',$email='',$message=''){
            $this->name=$name;
            $this->email=$email;
            $this->message=$message;

            $this->conn=$this->connDB();
        }
        public function getName() {
            return $this->name;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function getMessage() {
            return $this->message;
        }
    
        // Setters
        public function setName($name) {
            $this->name = $name;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function setMessage($message) {
            $this->message = $message;
        }

        public function insertMessage(){
            if(!(strlen($this->name)<2||!filter_var($this->email, FILTER_VALIDATE_EMAIL)||strlen($this->message)<10)){
                $sql = "INSERT INTO messages (Name,Email,Message)
                                            values('$this->name','$this->email','$this->message'); ";
                if ($s=$this->conn->query($sql)){
                    echo "<script>alert('Message sent succesfully');</script>";
                    echo "<script>window.location.href='contact.php';</script>";
                }else{
                    echo "<script>alert('Something failed');</script>";
                    echo "<script>window.location.href='contact.php';</script>";
                }
            }else{
                    echo "<script>alert('Please fill the fields carefully');</script>";
                    echo "<script>window.location.href='contact.php';</script>";
            }
         
        }
    }


?>