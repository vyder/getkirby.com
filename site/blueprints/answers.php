<?php if(!defined('KIRBY')) exit ?>

title: Answers
subpages: false
fields:
  title: 
    label: Title
    type:  text
  answers: 
    label: Answers
    type: table
    limit: 20
  questions: 
    label:   Sidebar Text
    type:    textarea
    size:    medium
    buttons: true
