<?php
    require_once('dbcon.php');

    class userCrud extends dbCon{
        private $userID;
        private $firstName;
        private $lastName;
        private $userName;
        private $email;
        private $password;
        
        private $conn;
        public function __construct($firstName='',$lastName='',$userName='',$email='',$password=''){
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->userName=$userName;
            $this->email=$email;
            $this->password=$password;

            $this->conn= $this->connDB();
        }
     
        public function getFirstName() {
            return $this->firstName;
        }
    
        public function getLastName() {
            return $this->lastName;
        }
    
        public function getUserName() {
            return $this->userName;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function getPassword() {
            return $this->password;
        }
      
    
        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }
    
        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }
    
        public function setUserName($userName) {
            $this->userName = $userName;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function setPassword($password) {
            $this->password = $password;
        }

        public function insertUser(){
                //validation
                if (!(strlen($this->firstName) < 2 || strlen($this->lastName) < 2 || !preg_match('/^[A-Za-z]{6,}$/', $this->userName) || !filter_var($this->email, FILTER_VALIDATE_EMAIL) || strlen($this->password) < 8)) {
                $hashedpassword=password_hash($this->password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO user (FirstName,LastName,Username,Email,Password)
                                        values('$this->firstName','$this->lastName','$this->userName','$this->email','$hashedpassword');";
            try{
               if ($result = $this->conn->query($sql)) {
                echo "<script>alert('User registered succesfully');</script>";
                echo "<script>window.location.href='login.php';</script>";
            }else{
                echo "<script>alert('Something went wrong');</script>";
                echo "<script>window.location.href='register.php';</script>";
            }
            }catch(Exception $e){
                    echo "<script>alert('User is registered');</script>";
                    echo "<script>window.location.href='register.php';</script>";
            }
            }else{
                echo "<script>alert('Criteria not met!');</script>";
                echo "<script>window.location.href='register.php';</script>";
            }
        }
        
            public function checkUser($email, $password) {
                $email = $this->conn->real_escape_string($email);
                $query = "SELECT * FROM `User` WHERE `Email` = '$email'";
                $result = $this->conn->query($query);
                if ($result && $result->num_rows > 0) {
                    $user=$result->fetch_assoc();
                   $check= password_verify($password,$user['Password']);
                   if($check){
                    return true;
                    }
                } else {
                    return false;
                }
            }
            public function checkAdmin($email,$password){
                $email = $this->conn->real_escape_string($email);
                $password = $this->conn->real_escape_string($password);
                $query = "SELECT * FROM `admins` WHERE `Email` = '$email' AND `Password` = '$password'";
                $result = $this->conn->query($query);
                if ($result && $result->num_rows > 0) {
                    return true;
                } else {
                    return false;
                }
            }
            public function delete($id){
                $query = "DELETE FROM user where ID = '$id'";
                if ($sql = $this->conn->query($query)) {
                    return true;
                }else{
                    return false;
                }
            }
           
    }

?>