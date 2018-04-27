<?php

if(filemtime('PublicPlaylist.json') < time()-60*5){
  $Output = array(
    'Categories' => array(
      'News' => array(
        'NPR Hourly World News' => array(
          'Image' => 'http://toppodcast.com/wp-content/uploads/2017/05/5669-600x600bb.jpg',
          'Feed'  => './api/?feed=npr-hourly-world-news'
        ),
        'CBC Hourly World News' => array(
          'Image' => 'http://www.cbc.ca/podcasting/images/promo-hourlies.jpg',
          'Feed'  => './api/?feed=cbc-hourly-world-news',
        ),
        'DW Hourly World News' => array(
          'Image' => 'http://www.dw.com/image/2135752_7.jpg',
          'Feed'  => './api/?feed=dw-hourly-world-news'
        )
      ),
      'Inspiration' => array(
        'Tim Ferriss' => array(
          'Image' => 'https://secureimg.stitcher.com/feedimagesplain328/48065.jpg',
          'Feed'  => './api/?feed=tim-ferriss'
        ),
        'Kevin Rose' => array(
          'Image' => '',
          'Feed'  => './api/?feed=kevin-rose'
        ),
        'Reid Hoffman' => array(
          'Image' => '',
          'Feed'  => './api/?feed=reid-hoffman'
        )
      ),
      'Learning' => array(
        'Economist: Money Talks' => array(
          'Image' => '',
          'Feed'  => './api/?feed=economist-money-talks'
        ),
        'NPR: Planet Money' => array(
          'Image' => '',
          'Feed'  => './api/?feed=planet-money',
        ),
        'Stuff You Should Know' => array(
          'Image' => '',
          'Feed'  => './api/?feed=stuff-you-should-know'
        ),
        '9% Invisible' => array(
          'Image' => '',
          'Feed'  => './api/?feed=99-invisible'
        ),
        'Star Talk' => array(
          'Image' => '',
          'Feed'  => './api/?feed=star-talk'
        )
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
