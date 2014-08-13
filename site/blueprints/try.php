<?php if(!defined('KIRBY')) exit ?>

title: Try
pages:
  template: try-item
  max:      4
files: true
fields:
  title:
    label: Title
    type:  text
  headline:
    label: Headline
    type:  text
    width: 1/2
    icon:  header
  subheadline:
    label: Subheadline
    type:  text
    width: 1/2
    icon:  header
  text:
    label: Text
    type:  textarea
    icon:  file-text-o