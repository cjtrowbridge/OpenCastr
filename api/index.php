<?php

if(isset($_GET['playlist'])){
  header("Content-Type: application/json; charset=UTF-8");
  $File = file_get_contents('playlist.json');
  die($File);
}


?>Not Found
