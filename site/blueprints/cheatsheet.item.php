<?php if(!defined('KIRBY')) exit ?>

# Cheatsheet Item blueprint

title: Cheat sheet item
pages:
  template: cheatsheet.item
  num: zero
files: true
fields:
  title:
    label: Title
    type:  text
  excerpt:
    label: Excerpt
    type: textarea
  text:
    label: Text
    type: textarea