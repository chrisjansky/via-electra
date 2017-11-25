<div class="m-people__item">
  <span class="m-people__holder">
    <span class="m-people__ratio">
      <?php if (!$person->photo()->empty()): ?>
        <img class="m-people__portrait" data-src="<?= $person->photo()->toFile()->crop(192)->url() ?>" alt="<?= $person->name()->html() ?> Photo">
      <?php endif ?>
    </span>
  </span>
  <h3 class="m-people__name"><?= $person->name()->html() ?></h3>
  <span class="m-people__position" data-grep>
    <?= $person->job()->html() ?>
  </span>
  <ul class="m-people__contact">
    <li>
      <a href="tel:<?= str_replace(" ","",$person->tel()->html()) ?>">
        <?= $person->tel()->html() ?>
      </a>
    </li>
    <li>
      <a href="mailto:<?= $person->email()->html() ?>">
        <?= $person->email()->html() ?>
      </a>
    </li>
  </ul>
</div>
