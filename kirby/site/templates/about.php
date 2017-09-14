<?php snippet('header') ?>

<div class="m-top--tall">
  <div class="m-top__content">
    <div class="m-top__wrap">
      <h1 class="m-top__title"><?= $page->title()->html() ?></h1>
    </div>
  </div>
  <?php if (!$page->photo()->empty()): ?>
    <div class="m-top__splash" data-src="<?= $page->photo()->toFile()->url() ?>"></div>
  <?php endif ?>
</div>

<main class="m-blurb--white" role="main">
  <div class="m-blurb__wrap">
  <strong class="m-blurb__claim" data-grep>
    <?= $page->headline()->html() ?>
  </strong>
    <div class="m-blurb__text" data-grep>
      <?= $page->text()->kirbytext() ?>
    </div>
    <div class="c-features">
      <h2 class="c-features__title"><?= l::get('features-title') ?></h2>
      <ul class="c-features__list">
        <?php foreach($page->features()->toStructure() as $feature): ?>
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

<div class="m-blurb--light">
  <div class="m-blurb__wrap">
    <div class="s-about__text m-blurb__text" data-grep>
      <p>
        <?= $page->partners_text()->html() ?>
      </p>
    </div>

    <?php snippet('partners') ?>
  </div>
</div>

<div class="m-people" id="people">
  <div class="m-people__wrap">
    <h2 class="m-people__title"><?= l::get('about-people') ?></h2>
    <div class="m-people__blurb" data-grep>
      <?= $page->people_text()->kirbytext() ?>
    </div>
    <div class="m-people__list">
      <?php foreach (page('contact')->children() as $person): ?>
        <?php snippet('person', array('person' => $person)) ?>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php if($page->hasVisibleChildren()): ?>
  <div class="m-careers" id="careers">
    <div class="m-careers__top">
      <h2 class="m-careers__title"><?= l::get('careers-title') ?></h2>
    </div>
    <div class="m-careers__list">
      <?php foreach ($page->children()->visible() as $job): ?>
        <div class="m-careers__item">
          <div class="m-careers__short">
            <div class="m-careers__image" data-src="<?= $job->photo()->toFile()->url() ?>"></div>
            <div class="m-careers__content">
              <div class="m-careers__wrap">
                <mark class="m-careers__strong"><?= l::get('careers-open') ?></mark>
                <h3 class="m-careers__name"><?= $job->title()->html() ?></h3>
              </div>
            </div>
          </div>
          <div class="m-careers__long">
            <h4 class="m-careers__caps"><?= l::get('careers-more') ?></h4>
            <div class="m-careers__description">
              <?= $job->text()->kirbytext() ?>
            </div>
            <a class="m-careers__button" href="mailto:careers@via-electra.eu"><?= l::get('careers-apply') ?></a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
<?php endif ?>

<?php snippet('footer') ?>
