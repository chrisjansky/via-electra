<?php if ($size == 'small'): ?>
  <div class="m-reach">
    <div class="m-reach__wrap">
      <div class="m-reach__person--small">
        <h2 class="m-reach__question"><?= l::get('reach-question') ?></h2>

        <?php if (!$primary_person->photo()->empty()): ?>
          <img class="m-reach__thumbnail" data-src="<?= $primary_person->photo()->toFile()->url() ?>" alt="<?= $primary_person->name()->html() ?>">
        <?php endif ?>

        <div class="m-reach__details">
          <strong class="m-reach__name"><?= $primary_person->name()->html() ?></strong>
          <span class="m-reach__position" data-grep>
            <?= $primary_person->job()->html() ?>
          </span>
          <ul class="m-reach__list">
            <li class="m-reach__item">
              <a class="m-reach__link" href="mailto:<?= $primary_person->email()->html() ?>"><?= $primary_person->email()->html() ?></a>
            </li>
            <li class="m-reach__item">
              <a class="m-reach__link" href="tel:<?= $primary_person->phone()->html() ?>">  <?= $primary_person->phone()->html() ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="m-reach" id="contact">
    <div class="m-reach__wrap">
      <p class="m-reach__text" data-grep>
        <?= $site->find('contact')->people_title()->html() ?>
      </p>
      <div class="m-reach__person--large">
        <?php if (!$primary_person->photo()->empty()): ?>
          <img class="m-reach__thumbnail" data-src="<?= $primary_person->photo()->toFile()->url() ?>" alt="<?= $primary_person->name()->html() ?>">
        <?php endif ?>
        <div class="m-reach__details">
          <strong class="m-reach__name"><?= $primary_person->name()->html() ?></strong>
          <span class="m-reach__position" data-grep>
            <?= $primary_person->job()->html() ?>
          </span>
          <ul class="m-reach__list">
            <li class="m-reach__item">
              <a class="m-reach__link" href="mailto:<?= $primary_person->email()->html() ?>"><?= $primary_person->email()->html() ?></a>
            </li>
            <li class="m-reach__item">
              <a class="m-reach__link" href="tel:<?= $primary_person->phone()->html() ?>">  <?= $primary_person->phone()->html() ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <?php if ($type == 'homepage'): ?>
        <a class="m-reach__button" href="<?= $site->find('contact')->url() ?>#people"><?= $caption->html() ?></a>
      <?php endif ?>
    </div>
  </div>
<?php endif ?>
