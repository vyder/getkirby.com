<?php if(!defined('KIRBY')) exit ?>

title: Forum
pages: false
fields:
  title: 
    label: Title
    type:  text
  threads: 
    label: Threads
    type: table
    limit: 20
  text: 
    label:   Forum Info
    type:    textarea
    buttons: true
