<?php

return function($site, $pages, $page) {

  if($query = get('q')) {
    $results = $page->search($query, 'title|text|description');
  } else {
    $query   = null;
    $results = null;
  }

  return compact('results', 'query');

};