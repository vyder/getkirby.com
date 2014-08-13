<?php if(!defined('KIRBY')) exit ?>

title: Blogarticle
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    format: DD.MM.YYYY
    width: 1/4
    default:
      type: date
      format: d.m.Y
  tags:
    label: Tags
    type:  tags
    width: 3/4
  text:
    label:   Text
    type:    textarea
    size:    large
    buttons: true