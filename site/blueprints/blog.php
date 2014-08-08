<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Blog
pages:
  template: blog.article
  sort: flip
  num: date
  limit: 15
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label:   Blog Text
    type:    textarea
    buttons: true
