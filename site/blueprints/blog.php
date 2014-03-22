<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Blog
subpages: false
fields:
  title: 
    label: Title
    type:  text
  articles: 
    label: Published articles
    type: table
    sort: date desc
    status: visible
  drafts: 
    label: Drafts
    type: table    
    status: invisible
  text: 
    label:   Blog Text
    type:    textarea
    buttons: true
