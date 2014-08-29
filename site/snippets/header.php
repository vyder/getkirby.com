<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">

  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <?php echo css('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic|Source+Code+Pro:400') ?>

  <?php echo css(array(
    'assets/css/site.css',
    'assets/css/autocomplete.css',
    'assets/css/prism.css',
  )) ?>

  <?php if($page->isHomePage()): ?>
  <title><?php echo html($page->headline()) ?> | <?php echo html($site->title()) ?></title>
  <?php else: ?>
  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
  <?php endif ?>

  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?php echo html($page->description()) ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <?php endif ?>

  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon.png') ?>" />
  <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="<?php echo html($site->title()) ?> Blog Feed" />

</head>
<body class="<?php echo str_replace('.', '-', $page->template()) ?>">

  <div class="message">
    <strong>This is a work-in-progress preview of the new <a href="<?php echo url('blog/kirby-2-beta-2') ?>">Kirby 2</a> site and docs.</strong>
    Please visit <a href="http://getkirby.com">getkirby.com</a> for more information about Kirby 1.
  </div>

  <div class="site">

    <!--[if lte IE 9]>
    <div class="browserupdate">
      You are using an obsolete browser which can harm your experience and cause security trouble. Please <a href="http://browsehappy.com/" target="_blank">update your browser!</a>
    </div>
    <![endif]-->

    <header class="site-header" role="banner">
      <a class="logo" href="<?php echo url() ?>">Kirby</a>
      <?php snippet('menu') ?>
    </header>
