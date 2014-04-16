<?php if(!defined('KIRBY')) exit ?>

# references blueprint

title: References
pages: 
  template: reference
  sort: flip
files: false
fields:
  title: 
    label: Title
    type:  text
  references: 
    label: References
    type: table
    sort: flip
    limit: 10
    previews: true
