<?php if(!defined('KIRBY')) exit ?>

title: Blogarticle
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  date: 
    label: Date
    type:  date
  tags: 
    label: Tags
    type:  tags
  text: 
    label:   Text
    type:    textarea
    size:    large
    buttons: true
