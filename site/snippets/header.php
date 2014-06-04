<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if($page->isHomePage()): ?>
  <title><?php echo html($page->headline()) ?></title>
  <?php else: ?>
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <?php endif ?>

  <?php echo css('assets/css/site.css') ?>

  <!-- favicons -->
  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon.png') ?>" />

  <?php echo html::shiv() ?>

</head>

<body<?php e(get('grid') == 'true', ' class="grid"') ?>>

  <div class="page">

    <header class="site-header" role="banner">
      <h1 class="logo"><a href="<?php echo url() ?>">Kirby</a></h1>
      <?php snippet('menu') ?>
    </header>
