<?php snippet('header') ?>

<div class="m-detail">
  <div class="m-detail__top">
    <?php if (!$page->general_cover()->empty()): ?>
      <div class="m-detail__splash" data-src="<?= $page->general_cover()->toFile()->url() ?>"></div>
    <?php endif ?>
    <div class="m-detail__scoop">
      <a class="m-detail__back" href="<?= url() ?>#work">← Reference</a>
      <strong class="m-detail__cat">Temp</strong>
      <h1 class="m-detail__title"><?= $page->title()->html() ?></h1>
    </div>
  </div>

  <main class="m-detail__wrap" role="main">
    <strong class="m-detail__claim" data-grep><?= $page->detail_headline()->html() ?></strong>
    <div class="m-detail__info">
      <div class="m-detail__group--description">
        <h2>Popis projektu</h2>
        <div class="m-detail__editor">
          <p><?= $page->detail_text()->html() ?></p>
        </div>
      </div>
      <div class="m-detail__group--services">
        <h2>Poskytnuté služby</h2>
        <div class="s-detail__services m-detail__editor">
          <?= $page->detail_services()->kirbytext() ?>
        </div>
      </div>
      <div class="m-detail__group--date">
        <h2>Rok realizace</h2>
        <div class="m-detail__editor">
          <p><?= $page->detail_completed()->html() ?></p>
        </div>
      </div>
    </div>
    <div class="m-detail__loop">
      <?php foreach($page->detail_media()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
  </main>

</div>

<?php snippet('reach', array('size' => 'small')) ?>

<div class="m-work">
  <h2 class="m-work__title">Další vybrané reference</h2>
  <div class="m-work__list">
    <?php foreach ($page->siblings(false) as $project): ?>
      <?php snippet('project-preview', array('project' => $project)) ?>
    <?php endforeach ?>
  </div>
</div>

<?php snippet('footer') ?>
