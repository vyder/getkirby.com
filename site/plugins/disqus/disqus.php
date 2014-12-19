<?php

/**
 * Disqus plugin
 *
 * @author Bastian Allgeier <bastian@getkirby.com>
 * @version 2.0.0
 */
function disqus($shortname, $params = array()) {

  $defaults = array(
    'shortname'  => $shortname,
    'title'      => page()->title(),
    'identifier' => page()->disqussId()->or(page()->uri()),
    'developer'  => false,
    'url'        => url::current(),
  );

  $options = array_merge($defaults, $params);

  if(empty($options['shortname'])) throw new Exception('Please provide a disqus shortname');

  $options['title']     = addcslashes($options['title'], "'");
  $options['developer'] = $options['developer'] ? 'true' : 'false';

  return tpl::load(__DIR__ . DS . 'template.php', $options);

}