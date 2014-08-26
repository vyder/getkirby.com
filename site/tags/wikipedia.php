<?php

kirbytext::$tags['wikipedia'] = array(
  'attr' => array(
    'text'
  ),
  'html' => function($tag) {

    $url     = 'http://wikipedia.org/wiki';
    $article = $tag->attr('wikipedia');
    $text    = $tag->attr('text', 'Wikipedia');

    return '<a href="' . $url . '/' . $article . '">' . $text . '</a>';

  }
);