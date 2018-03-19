<?php

/*
  User Behaviors;
    Users can sign up or log in via OAuth.
    Users can browse podcasts and subscribe or unsubscribe.
    Users have a playlist of episodes to listen to.
    Progress is synchronized between user sessions.
*/

if(!file_exists('Config.php')){
  die('API Config Required');
}
include('Config.php');

header("Content-Type: application/json; charset=UTF-8");
$File = file_get_contents('userObject.json');
die($File);
