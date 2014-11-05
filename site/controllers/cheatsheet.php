<?php

return function($site, $pages, $page) {

  $cache   = new Cache\Driver\File(kirby()->roots()->cache());
  $cacheId = $page->cacheId() . '.main';
  $content = $cache->get($cacheId);
  $content = null;

  if(empty($content)) {    
    $content = snippet('cheatsheet', array('page' => $page), true);
    $cache->set($cacheId, $content);
  }

  return compact('content');

};