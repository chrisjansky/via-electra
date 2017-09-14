<?php snippet('header') ?>

<div class="m-top--short">
  <div class="m-top__content">
    <div class="m-top__wrap">
      <h1 class="m-top__title">Kontakt</h1>
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
              <h3 class="m-offices__city">Pobočka <?= $location->locations_name()->html() ?></h3>
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
                <img class="m-offices__portrait" data-src="http://source.unsplash.com/random/180x180?sig=0" alt="Placeholder">
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
    <h2 class="m-billing__title">Obchodní údaje</h2>
    <div class="m-billing__content">
      <div class="m-billing__group"><strong>via electra s.r.o.</strong>
        <ul>
          <li>Purkyňová 648/125</li>
          <li>612 00 Brno, CZ</li>
        </ul>
      </div>
      <div class="m-billing__group"><em>CZ</em>
        <ul>
          <li>IČ 04877241</li>
          <li>DIČ CZ04877241</li>
        </ul><span>CZK účet</span>
        <ul>
          <li>2700966980/2010,</li>
          <li>IBAN CZ6220100000002700966980</li>
          <li>SWIFT FIOBCZPPXXX</li>
        </ul><span>EUR účet</span>
        <ul>
          <li>2101083254/2010</li>
          <li>IBAN CZ9620100000002101083254</li>
          <li>SWIFT FIOBCZPPXXX</li>
        </ul>
      </div>
      <div class="m-billing__group"><em>SK</em>
        <ul>
          <li>IČ 04877241</li>
          <li>DIČ 4120056732</li>
          <li>IČ DPH SK4120056732</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
