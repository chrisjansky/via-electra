<nav class="c-menu">
  <div class="c-menu__content">
    <button class="c-menu__close" type="button" data-toggle="menu"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Group 11</title><g transform="translate(3 3)" stroke="#000" stroke-width="3" fill="none" stroke-linecap="square"><path d="M14 0L0 14" id="Line-3"/><path d="M14 14L0 0" id="Line-3-Copy"/></g></svg></button>
    <ul class="c-menu__list">
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= url($site->language()->code()) ?>" data-toggle="menu"><?= page('home')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= url($site->language()->code()) ?>#services" data-toggle="menu"><?= page('services')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= url($site->language()->code()) ?>#work" data-toggle="menu"><?= page('projects')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= page('about')->url($site->language()->code()) ?>" data-toggle="menu"><?= page('about')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= page('contact')->url($site->language()->code()) ?>" data-toggle="menu"><?= page('contact')->title() ?></a>
      </li>
    </ul>
    <?php foreach ($site->languages() as $language): ?>
      <?php if ($site->language() !== $language): ?>
        <a class="c-menu__switch no-barba" href="<?= $language->url() ?>" data-toggle="menu"><?= html($language->name()) ?></a>
      <?php endif ?>
    <?php endforeach ?>
  </div>
  <span class="c-menu__frame" data-toggle="menu"></span>
</nav>
