<?php snippet('header') ?>

<div class="m-split--full">
  <div class="m-split__content--white">
    <h1 class="m-split__title" data-grep>
      <?= $page->intro_headline()->html() ?>
    </h1>
    <nav class="c-anchors"><a class="c-anchors__arrow" href="#intro"><svg width="18" height="24" viewBox="0 0 18 24" xmlns="http://www.w3.org/2000/svg"><title>Group 6</title><g id="Page-1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-49 -614)" stroke="#000"><g id="Group-6" transform="translate(50 613)"><path id="Rectangle-6" transform="rotate(45 7.778 16.778)" d="M13.278 11.278v11h-11"/><path d="M7.667 1v23" id="Line"/></g></g></g></svg></a>
      <ul class="c-anchors__list">
        <li class="c-anchors__item"><a class="c-anchors__link" href="#services">Služby</a></li>
        <li class="c-anchors__item"><a class="c-anchors__link" href="#work">Reference</a></li>
        <li class="c-anchors__item"><a class="c-anchors__link" href="#about">O nás</a></li>
        <li class="c-anchors__item"><a class="c-anchors__link" href="#contact">Kontakt</a></li>
      </ul>
    </nav>
  </div>
  <div class="m-split__image" data-src="<?= $page->intro_image()->toFile()->url() ?>"></div>
</div>

<div class="m-hilite" id="intro">
  <div class="m-hilite__wrap">
    <h2 class="m-hilite__title" data-grep>
      <?= $page->intro_text()->html() ?>
    </h2>
    <ul class="m-facts">
      <?php foreach($page->intro_facts()->toStructure() as $fact): ?>
        <li class="m-facts__item" data-countup>
          <strong class="m-facts__digit">
            <span data-value="<?= $fact->facts_number()->html() ?>"><?= $fact->facts_number()->html() ?></span><?= $fact->facts_suffix()->html() ?>
          </strong>
          <span class="m-facts__label" data-grep><?= $fact->facts_caption()->html() ?></span>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<main class="m-services" role="main" id="services">
  <div class="m-services__wrap">
    <h2 class="m-services__title">Naše specializace</h2>
    <div class="m-services__list">

      <?php foreach (page("services")->children()->visible() as $service): ?>
        <a class="m-services__item" href="<?= $service->url() ?>">
          <span class="m-services__holder">
            <span class="m-services__ratio">
              <?php if (!$service->general_thumb()->empty()): ?>
                <img class="m-services__image" data-src="<?= $service->general_thumb()->toFile()->url() ?>" alt="<?= $service->title()->html() ?>">
              <?php endif ?>
            </span>
          </span>
          <h3 class="m-services__name"><?= $service->title()->html() ?></h3>
          <p class="m-services__text"><?= $service->general_text()->html() ?></p>
          <span class="m-services__button"><?= $service->general_caption()->html() ?></span>
        </a>
      <?php endforeach ?>

    </div>
  </div>
</main>

<div class="m-work" id="work">
  <h2 class="m-work__title">Vybrané reference</h2>
  <div class="m-work__list">

    <?php foreach (page("projects")->children()->visible() as $project): ?>
      <?php snippet('project-preview', array('project' => $project)) ?>
    <?php endforeach ?>

  </div>
</div>

<div class="m-blurb--light" id="about">
  <div class="m-blurb__wrap">
    <h2 class="m-blurb__title">O nás</h2>
    <strong class="m-blurb__claim" data-grep>
      <?= $page->about_text()->html() ?>
    </strong>

    <?php snippet('partners') ?>

    <a class="m-blurb__button" href="<?= page('about')->url() ?>"><?= $page->about_caption()->html() ?></a>
  </div>
</div>
<div class="m-hiring">
  <div class="m-hiring__image" data-src="<?= $page->careers_image()->toFile()->url() ?>"></div>
  <div class="m-hiring__content">
    <div class="m-hiring__wrap">
      <h3 class="m-hiring__strong"><?= $page->careers_title()->html() ?></h3>
      <p class="m-hiring__text">
        <?= $page->careers_text()->html() ?>
      </p>
      <a class="m-hiring__button" href="<?= page('about')->url() ?>#careers">
        <?= $page->careers_caption()->html() ?>
      </a>
    </div>
  </div>
</div>

<?php snippet('reach', array('size' => 'large', 'type' => 'homepage', 'caption' => $page->contact_caption())) ?>

<div class="m-pins">
  <div class="m-pins__image" data-src="<?= $page->locations_image()->toFile()->url() ?>"></div>
  <div class="m-pins__content">
    <div class="m-pins__wrap">
      <h3 class="m-pins__strong"><?= $page->locations_title()->html() ?></h3>
      <p class="m-pins__text" data-grep>
        <?= $page->locations_text()->html() ?>
      </p>
      <a class="m-pins__button" href="<?= page('contact')->url() ?>#offices">
        <?= $page->locations_caption()->html() ?>
      </a>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
