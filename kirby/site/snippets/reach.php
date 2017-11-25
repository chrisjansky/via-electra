<?php if ($size == 'small'): ?>
  <div class="m-reach">
    <div class="m-reach__wrap">
      <div class="m-reach__person--small">
        <h2 class="m-reach__question">
          <?= $site->find('contact')->short_question()->html() ?>
        </h2>

        <?php if (!$primary_person->photo()->empty()): ?>
          <img class="m-reach__thumbnail" data-src="<?= $primary_person->photo()->toFile()->crop(192)->url() ?>" alt="<?= $primary_person->name()->html() ?>">
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
              <a class="m-reach__link" href="tel:<?= str_replace(" ","",$primary_person->tel()->html()) ?>">
                <?= $primary_person->tel()->html() ?>
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
        <?= $site->find('contact')->long_question()->html() ?>
      </p>
      <div class="m-reach__person--large">
        <?php if (!$primary_person->photo()->empty()): ?>
          <img class="m-reach__thumbnail" data-src="<?= $primary_person->photo()->toFile()->crop(256)->url() ?>" alt="<?= $primary_person->name()->html() ?>">
        <?php endif ?>
        <div class="m-reach__details">
          <strong class="m-reach__name"><?= $primary_person->name()->html() ?></strong>
          <span class="m-reach__position" data-grep>
            <?= $primary_person->job()->html() ?>
          </span>
          <ul class="m-reach__list">
            <li class="m-reach__item">
              <a class="m-reach__link" href="mailto:<?= $primary_person->email()->html() ?>">
                <?= $primary_person->email()->html() ?></a>
            </li>
            <li class="m-reach__item">
              <a class="m-reach__link" href="tel:<?= str_replace(" ","",$primary_person->tel()->html()) ?>">
                <?= $primary_person->tel()->html() ?>
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
