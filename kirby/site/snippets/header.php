<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <script src="https://use.typekit.net/pxl3znj.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <link rel="icon" href="<?= kirby()->urls()->assets() ?>/favicon.ico">
  <link rel="icon" href="<?= kirby()->urls()->assets() ?>/favicon-32x32.png" sizes="32x32">
  <link rel="icon" href="<?= kirby()->urls()->assets() ?>/favicon-16x16.png" sizes="16x16">
  <link rel="apple-touch-icon-precomposed" href="<?= kirby()->urls()->assets() ?>/apple-touch-icon-152x152.png">

  <?= css('assets/css/style-min.css') ?>

</head>
<body>

  <div id="barba-wrapper">
    <?php snippet('hud') ?>
    <?php snippet('menu') ?>
    
    <div class="barba-container">
