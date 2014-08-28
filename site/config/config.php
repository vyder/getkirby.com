<?php

c::set('markdown.extra', true);

c::set('routes', array(
  array(
    'pattern' => 'docs.json',
    'action'  => function() {
      $data = page('docs')->index()->visible()->sortBy('title', 'asc')->toArray(function($item) {
        return array(
          'title' => $item->title()->toString(),
          'uri'   => $item->uri()
        );
      });
      return response::json(array_values($data));
    }
  )
));