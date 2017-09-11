<div class="m-people__item">
  <span class="m-people__holder">
    <span class="m-people__ratio">
      <?php if (!$person->photo()->empty()): ?>
        <img class="m-people__portrait" data-src="<?= $person->photo()->toFile()->url() ?>" alt="<?= $person->name()->html() ?> Photo">
      <?php endif ?>
    </span>
  </span>
  <h3 class="m-people__name"><?= $person->name()->html() ?></h3>
  <span class="m-people__position" data-grep>
    <?= $person->job()->html() ?>
  </span>
  <ul class="m-people__contact">
    <li><?= $person->tel()->html() ?></li>
    <li>
      <a href="mailto:<?= $person->email()->html() ?>">
        <?= $person->email()->html() ?>
      </a>
    </li>
  </ul>
</div>
