<?php
 header('Access-Control-Allow-Origin:*'); 
 header('Content-Type: application/Json');

  //files required for database connectivity and controller..
 include_once('C:\xampp\htdocs\project\config\database.php');
 include_once('C:\xampp\htdocs\project\model\logic.php');

 //creating database object...
 $database = new Database();
    $db = $database->connect();
    
 $user['mobile']=$_POST['mobile'];
    $user['name']=$_POST['name'];
      $user['email']=$_POST['email'];
        $user['password']=$_POST['password'];
 
  //creating controller object...      
 $logic = new post();
   $result=$logic->read($user,$db);
   
   //if result is true insert new entity...
      if($result) {
           $logic->insert($user,$db);
              echo("Registration complete");
        } else {
                echo("User already exist");
           }
?>