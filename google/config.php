<?php
require_once('googleApi\vendor\autoload.php');
session_start();
  $client = new Google_client();
    $client->setAuthConfig('client_credentials.json');
      $client->addscope([Google_Service_Oauth2::PLUS_LOGIN, Google_Service_Oauth2::USERINFO_EMAIL]);
        $client->setRedirectUri("http://localhost/project/google/callback.php");
?>