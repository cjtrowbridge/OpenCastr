<?php

if(isset($_GET['feed'])){
  switch($_GET['feed']){

    case 'npr-hourly-world-news':
      FetchFeed('https://www.npr.org/rss/podcast.php?id=500005');
    case 'cbc-hourly-world-news':
      FetchFeed('http://www.cbc.ca/podcasting/includes/hourlynews.xml');
    case 'dw-hourly-world-news':
      FetchFeed('http://rss.dw.com/xml/podcast_news');
    case 'tim-ferriss':
      FetchFeed('https://tim.blog/feed/');
    case 'kevin-rose':
      FetchFeed('https://rss.simplecast.com/podcasts/3408/rss');
    case 'reid-hoffman':
      FetchFeed('https://rss.art19.com/masters-of-scale');
    case 'economist-money-talks':
      FetchFeed('https://rss.acast.com/theeconomistmoneytalks');
    case 'planet-money':
      FetchFeed('https://www.npr.org/rss/podcast.php?id=510289');
    case 'stuff-you-should-know':
      FetchFeed('https://feeds.megaphone.fm/stuffyoushouldknow');
    case '99-invisible':
      FetchFeed('http://feeds.99percentinvisible.org/99percentinvisible?format=xml');
    case 'star-talk':
      FetchFeed('https://feeds.soundcloud.com/users/soundcloud:users:38128127/sounds.rss');
   default:
     die('Unknown Feed');
 }
}

function FetchFeed($url){
  header("Content-type: text/xml");
  echo file_get_contents($url);
  //TODO implement caching
  exit;
}

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


if(isset($_GET['auth'])){
  include('Auth.php');
  Auth();
}
