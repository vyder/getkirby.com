<?php if(!defined('KIRBY')) exit ?>

# site blueprint

title: Site
fields: 

  title: 
    label: Title
    type:  text

  headline: 
    label: Headline
    type:  text

  subheadline: 
    label: Subheadline
    type:  text

  intro: 
    label: Intro
    type:  textarea

  features: 
    label: Features
    type:  table
    source: features
    limit: 5

  made-with: 
    label: Made with Kirby and love
    type:  table
    source: references/made-with-kirby-and-love
    previews: true
    limit: 5

  voices: 
    label: Voices
    type:  table
    source: references/voices
    previews: 
      type: url
      url: http://twitter.com/api/users/profile_image/{username}
    limit: 5