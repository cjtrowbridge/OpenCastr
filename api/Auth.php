<?php

function Auth(){
  if(
    isset($_GET['auth'])&&
    $_GET['auth']=='google'
  ){
    echo PHP_EOL.'Google Token: '.$_GET['token'].PHP_EOL;
  }
}
