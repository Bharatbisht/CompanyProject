<?php
require_once('config.php');

  if (isset($_GET['code'])) {
       $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    }
    
 $info = new Google_Service_Oauth2($client);
   $data = $info->userinfo->get();

 $user['name']=$data->name;
   $user['email']=$data->email;
     $user['mobile']="";
       $user['password']="";

include_once('C:\xampp\htdocs\project\config\database.php');
include_once('C:\xampp\htdocs\project\model\logic.php');

 $database = new Database();
   $db = $database->connect();

 $logic = new post();
   $logic->insert($user,$db);
      echo('Data inserted');
?>
