<?php

function Auth(){
  if(
    isset($_GET['auth'])&&
    $_GET['auth']=='google'
  ){
    echo PHP_EOL.'GET: '.PHP_EOL;
    var_dump($_GET);
    echo PHP_EOL.'POST: '.PHP_EOL;
    var_dump($_POST);
  }

  
  require_once 'google-api-php-client/src/Google_Client.php';
  require_once 'google-api-php-client/src/contrib/Google_Oauth2Service.php';
  session_start();

  global $GOOGLE;
  $client = new Google_Client();
  $client->setClientId($GOOGLE['ClientID']);
  $client->setClientSecret($GOOGLE['ClientSecret']);

  $oauth2 = new Google_Oauth2Service($client);

  if (isset($_SESSION['token'])) {
   $client->setAccessToken($_SESSION['token']);
  }

  if (isset($_REQUEST['logout'])) {
    unset($_SESSION['token']);
    $client->revokeToken();
  }

  
  
}
