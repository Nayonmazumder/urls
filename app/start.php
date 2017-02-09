<?php

  use Slim\App as Slim;
  use ShortR\Models\Link;

  //debug
  ini_set('display_errors','On');

  require '../vendor/autoload.php';
  require 'database.php';

  $app = new Slim();

  $app->get('/',function(){
    $link = Link::where('url','http://duckduckgo.com')->first();
    var_dump($link);
  });


?>
