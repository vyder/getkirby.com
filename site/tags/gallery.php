<?php

kirbytext::$tags['gallery'] = array(
  'html' => function($tag) {

    $page      = $tag->page();
    $images    = array();
    $filenames = str::split($tag->attr('gallery'));
    $gallery   = brick('section')->addClass('gallery');

    foreach($filenames as $filename) {
      $images[] = $page->image($filename);
    }

    foreach($images as $image) {

      $figure = brick('figure')->append(function() use($image) {
        return brick('img', null)->attr('src', $image->url());
      });

      $gallery->append($figure);

    }

    return $gallery;

  }
);