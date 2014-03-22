<?php if(!defined('KIRBY')) exit ?>

title: Voices
subpages: false
fields:
  title: 
    label: Title
    type:  text
  voices: 
    label: Voices
    type:  table
    previews: 
      type: url
      url:  http://twitter.com/api/users/profile_image/{username}

