<?php snippet('header') ?>

<div class="m-top--short">
  <div class="m-top__content">
    <div class="m-top__wrap">
      <h1 class="m-top__title"><?= l::get('contact') ?></h1>
    </div>
  </div>
</div>
<div class="s-contact">
      <?php snippet('reach', array('size' => 'large', 'type' => 'contact')) ?>

      <div class="m-people" id="people">
        <div class="m-people__wrap">
          <div class="m-people__list">
            <?php foreach ($page->children()->not($primary_uri) as $person): ?>
              <?php snippet('person', array('person' => $person)) ?>
            <?php endforeach ?>
          </div>
        </div>
      </div>
</div>
<main class="m-offices" role="main" id="offices">
  <div class="m-offices__wrap">
    <h2 class="m-offices__title" data-grep><?= $page->locations_title()->html() ?></h2>
    <div class="m-offices__list">
      <?php foreach($page->locations()->toStructure() as $location): ?>
        <div class="m-offices__item">
          <div class="m-offices__embed">
            <iframe src="https://www.google.com/maps?q=<?= $location->locations_map()->toStructure()->address()->value() ?>&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
          </div>
          <div class="m-offices__info">
            <div class="m-offices__description">
              <h3 class="m-offices__city"><?= l::get('office') ?> <?= $location->locations_name()->html() ?></h3>
              <div class="m-offices__address">
                <?= $location->locations_address->kirbytext() ?>
              </div>
            </div>
            <div class="m-offices__reach">
              <?php
                $locations_uri = $location->locations_person()->value();
                $locations_person = $page->find($locations_uri);
              ?>
              <div class="m-offices__person">
                <span class="m-offices__portrait">
                  <?php if (!$locations_person->photo()->empty()): ?>
                    <img data-src="<?= $locations_person->photo()->toFile()->crop(64)->url() ?>" alt="<?= $locations_person->name()->html() ?> Photo">
                  <?php endif ?>
                </span>
                <strong class="m-offices__name">
                  <?= $locations_person->name()->html() ?>
                </strong>
              </div>
              <ul class="m-offices__contact">
                <li><?= $locations_person->tel()->html() ?></li>
                <li>
                  <a href="mailto:<?= $locations_person->email()->html() ?>">
                    <?= $locations_person->email()->html() ?>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>

<div class="m-billing">
  <div class="m-billing__wrap">
    <h2 class="m-billing__title"><?= $page->info_title()->html() ?></h2>

    <div class="m-billing__content">
      <div class="m-billing__group">
        <?= $page->info_address()->kirbytext() ?>
      </div>
      <div class="m-billing__group">
        <?= $page->info_czech()->kirbytext() ?>
      </div>
      <div class="m-billing__group">
        <?= $page->info_slovak()->kirbytext() ?>
      </div>
    </div>

  </div>
</div>

<?php snippet('footer') ?>
