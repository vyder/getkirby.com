<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
files: false
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  email:
    label: Email
    type:  email
    width: 1/2
  author:
    label: Author
    type:  text
    width: 1/4
    icon:  user
  copyright:
    label: Copyright
    type:  text
    width: 3/4
    icon:  exclamation
  description:
    label: Description
    type:  text
    icon:  info-circle
  keywords:
    label: Keywords
    type:  tags

