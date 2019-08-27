<?php
require_once('config.php');
  $url = $client->createAuthUrl();
    header('location:'.$url);
?>