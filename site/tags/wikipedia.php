<?php

kirbytext::$tags['wikipedia'] = array(
  'html' => function($tag) {
    return 'http://en.wikipedia.org/' . $tag->attr('wikipedia');
  }
);