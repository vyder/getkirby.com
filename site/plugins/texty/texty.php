<?php

kirbytext::$pre[] = function($kirbytext, $value) {

  $snippets = (array)c::get('kirbytext.snippets');
  $values   = array_values($snippets);
  $keys     = array_map(function($key) {
    return '<' . $key . '>';
  },array_keys($snippets));

  return str_replace($keys, $values, $value);

};