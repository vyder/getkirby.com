<?php if(!defined('KIRBY')) exit ?>

title: Mielstone
pages: true
preview: parent
files: true
fields:
  title:
    label: Title
    type:  text
  date:
    label:  Date
    type:   date
    format: DD.MM.YYYY
    default:
      type:   date
      format: d.m.Y
  description:
    label: Description
    type: textarea
    icon: file-text-o