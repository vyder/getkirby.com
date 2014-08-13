<?php if(!defined('KIRBY')) exit ?>

title: Docs
pages: docs
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    icon:  file-text-o
  line-a:
    type:  line
  docs:
    label: Docs [Further reading]
    type:  textarea
    icon:  link
    width: 1/2
  blogposts:
    label: Blogposts [Further reading]
    type:  textarea
    icon:  link
    width: 1/2
  forumposts:
    label: Forumposts [Further reading]
    type:  textarea
    icon:  link
    width: 1/2
  internals:
    label: Internal resources [Further reading]
    type:  textarea
    icon:  link
    width: 1/2
  externals:
    label: External resources [Further reading]
    type:  textarea
    icon:  link
    width: 1/2
