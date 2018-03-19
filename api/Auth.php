<?php

function Auth(){
  if(
    isset($_GET['auth'])&&
    $_GET['auth']=='google'
  ){
    echo PHP_EOL.'Google Token: '.PHP_EOL;
    var_dump($_REQUEST);
  }
}
