<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(filemtime('PublicPlaylist.json') < time()-60*5){
  $Output = array(
    'Categories' => array(
      'News'        => array(
        'NPR Hourly World News' => './api/?feed=npr-hourly-world-news',
        'CBC Hourly World News' => './api/?feed=cbc-hourly-world-news',
        'DW Hourly World News'  => './api/?feed=dw-hourly-world-news'
      ),
      'Inspiration' => array(
        'Tim Ferriss'           => './api/?feed=tim-ferriss',
        'Kevin Rose'            => './api/?feed=kevin-rose',
        'Reid Hoffman'          => './api/?feed=reid-hoffman'
      ),
      'Learning'    => array(
        'Economist'             => './api/?feed=economist',
        'NPR: Planet Money'     => './api/?feed=planet-money',
        'Stuff You Should Know' => './api/?feed=stuff-you-should-know',
        '9% Invisible'          => './api/?feed=99-invisible'
        'Star Talk'             => './api/?feed=star-talk'
      )
    )
  );
  $Output = json_encode($Output, JSON_PRETTY_PRINT);
  file_put_contents('PublicPlaylist.json',$Output);
}else{
  $Output = file_get_contents('PublicPlaylist.json');
}

header('Content-Type: application/json');
die($Output);
