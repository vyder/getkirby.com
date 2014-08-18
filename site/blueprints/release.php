<?php if(!defined('KIRBY')) exit ?>

title: Release
pages: false
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
  text:
    label: Release notes
    type: textarea
    icon: file-text-o