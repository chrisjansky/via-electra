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

  <?= css('assets/css/style-min.css') ?>

</head>
<body>

  <div id="barba-wrapper">
    <?php snippet('hud') ?>
    <?php snippet('menu') ?>
    
    <div class="barba-container">
