<?php


c::set('routes', array(
  array(
    'pattern' => '(:any)',
    'action'  => function($uid) {

      if($page = page($uid)) {
        return $page;
      } else if($page = page('blog/' . $uid)) {
        return $page;
      } else {
        return site()->errorPage();
      }

    }
  ),
  array(
    'pattern' => 'blog/(:any)',
    'action'  => function($uid) {
      go($uid);
    }
  )
));
