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
}
