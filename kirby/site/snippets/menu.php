<nav class="c-menu">
  <div class="c-menu__content">
    <button class="c-menu__close" type="button" data-toggle="menu"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Group 11</title><g transform="translate(3 3)" stroke="#000" stroke-width="3" fill="none" stroke-linecap="square"><path d="M14 0L0 14" id="Line-3"/><path d="M14 14L0 0" id="Line-3-Copy"/></g></svg></button>
    <ul class="c-menu__list">
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= url() ?>" data-toggle="menu"><?= page('home')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= url() ?>#services" data-toggle="menu"><?= page('services')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= url() ?>#work" data-toggle="menu"><?= page('projects')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= page('about')->url() ?>" data-toggle="menu"><?= page('about')->title() ?></a>
      </li>
      <li class="c-menu__item">
        <a class="c-menu__link" href="<?= page('contact')->url() ?>" data-toggle="menu"><?= page('contact')->title() ?></a>
      </li>
    </ul>
    <a class="c-menu__switch" href="javascript:">English</a>
  </div>
  <span class="c-menu__frame" data-toggle="menu"></span>
</nav>
