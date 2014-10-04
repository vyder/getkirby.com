<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
files: false
fields:
  title:
    label: Title
    type:  text
  email:
    label: Email
    type:  email
    width: 1/2
  author:
    label: Author
    type:  text
    width: 1/2
    icon:  user
  description:
    label: Description
    type:  text
    icon:  info-circle
  keywords:
    label: Keywords
    type:  tags

