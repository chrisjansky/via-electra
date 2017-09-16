<?php snippet('header') ?>

<div class="m-split--short">
  <div class="m-split__content--gradient">
    <a class="m-split__back" href="<?= url() ?>#services">← <?= l::get('services') ?></a>
    <h1 class="m-split__title" data-grep><?= $page->title()->html() ?></h1>
  </div>
  <?php if (!$page->detail_image()->empty()): ?>
    <div class="m-split__image" data-src="<?= $page->detail_image()->toFile()->resize(1680, 1680)->url() ?>"></div>
  <?php endif ?>
</div>
<main class="s-service__blurb m-blurb--white" role="main">
  <div class="m-blurb__wrap">
    <h2 class="m-blurb__claim" data-grep>
      <?= $page->detail_headline()->html() ?>
    </h2>
    <div class="m-blurb__text" data-grep>
      <p><?= $page->detail_text()->html() ?></p>
    </div>
    <ul class="m-facts">
      <?php foreach($page->detail_facts()->toStructure() as $fact): ?>
        <li class="m-facts__item" data-countup>
          <strong class="m-facts__digit">
            <span data-value="<?= $fact->facts_number()->html() ?>"><?= $fact->facts_number()->html() ?></span><?= $fact->facts_suffix()->html() ?></strong>
            <span class="m-facts__label" data-grep><?= $fact->facts_caption()->html() ?></span>
        </li>
      <?php endforeach ?>
    </ul>
        <div class="c-features">
          <h2 class="c-features__title">
            <?= $page->detail_features_title()->html() ?>
          </h2>
          <ul class="c-features__list">
            <?php foreach($page->detail_features()->toStructure() as $feature): ?>
              <li class="c-features__item">
                <span class="c-features__icon">
                  <img src="<?= $feature->features_icon()->toFile()->url() ?>" alt="Icon">
                </span>
                <h3 class="c-features__name"><?= $feature->features_title()->html() ?></h3>
                <p class="c-features__text"><?= $feature->features_text()->html() ?></p>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
  </div>
</main>

<?php if ($page->hasVisibleChildren()): ?>
  <div class="m-infobox" id="info">
    <div class="m-infobox__wrap">
      <h2 class="m-infobox__title">
        <?= $page->detail_infobox_title()->html() ?>
      </h2>
      <div class="m-infobox__body">
        <?php foreach ($page->children()->visible() as $info): ?>
          <div class="m-infobox__block">
            <?php if (!$info->photo()->empty()): ?>
              <div class="m-infobox__image" data-src="<?= $info->photo()->toFile()->resize(1600, 1200)->url() ?>"></div>
            <?php endif ?>
            <h3 class="m-infobox__head"><?= $info->title()->html() ?></h3>
            <div class="m-infobox__text">
              <?= $info->text()->kirbytext() ?>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
<?php endif ?>

<?php if (!$page->general_related()->empty()) : ?>
  <div class="m-work">
    <h2 class="m-work__title"><?= l::get('service-related-work') ?></h2>
    <div class="m-work__list">
      <?php snippet('project-preview', array('project' => page('projects')->find($page->general_related()))) ?>
    </div>
  </div>
<?php endif ?>

<?php snippet('reach', array('size' => 'small')) ?>

<div class="m-related">
  <div class="m-related__top">
    <h2 class="m-related__title"><?= l::get('service-related') ?></h2>
  </div>
  <div class="m-related__list">
    <?php foreach($page->siblings(false) as $sibling): ?>
      <a class="m-related__link" href="<?= $sibling->url() ?>">
        <img class="m-related__image" data-src="<?= $sibling->general_thumb()->toFile()->crop(256)->url() ?>" alt="<?= $sibling->title()->html() ?>">
        <h3 class="m-related__name"><?= $sibling->title()->html() ?></h3>
      </a>
    <?php endforeach ?>
  </div>
</div>

<?php snippet('footer') ?>
