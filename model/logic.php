<?php
class post {
     
    //read the data from database....
    public function read($user,$conn) {
          
        $mobile = $user['mobile'];
          $query = "SELECT `Mobile` FROM `intro` WHERE `Mobile`='$mobile'";
            $stmt = $conn->prepare($query);
              $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_OBJ);
        
        //check the mobile number is set or not...
        return (!isset($result->Mobile)) ? true : false;
    }

    public function insert($user,$conn) {
        
        $name = $user['name'];
          $mobile = $user['mobile'];
            $email = $user['email'];
              $password = $user['password'];
        $query = "INSERT INTO `intro` VALUES('$name','$mobile','$email','$password')";
          $stmt = $conn->prepare($query);
            $stmt->execute();
    }
}

?>