      <footer class="m-footer">
        <div class="m-footer__wrap">
          <div class="m-footer__flex">
            <div class="m-footer__card">
              <a class="m-footer__logo c-logo--white" href="<?= url() ?>">
                <svg width="39" height="39" viewBox="0 0 39 39" xmlns="http://www.w3.org/2000/svg"><title>Page 1</title><g transform="translate(0 1)" fill="none" fill-rule="evenodd"><path id="Stroke-3" stroke="url(#linearGradient-main)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M37.5 8.375L25.443 8.4l-9.318 10.475-14.25-8.25L12 .125l7.866 4.685"/><path id="Stroke-5" stroke="url(#linearGradient-main)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M25.5 34.625l10.5-6v-15.75l-17.25 9.75v13.5l-15.75-9v-8.25"/><path d="M6 19.625a3 3 0 1 1-6 0 3 3 0 0 1 6 0" id="Fill-7" fill="#1F995C"/><path d="M22.5 4.625a3 3 0 1 1-6 0 3 3 0 0 1 6 0" id="Fill-9" fill="#49AE4F"/><path d="M29.25 33.875a3 3 0 1 1-6 0 3 3 0 0 1 6 0" id="Fill-1" fill="#70C143"/></g></svg><strong class="c-logo__text--main">via electra</strong></a>
              <div class="m-footer__contact">
                <?= page('contact')->address()->kirbytext() ?>
              </div>
              <ul class="m-footer__contextual">
                <li><a href="<?= page('contact')->url() ?>#people">Zaměstnanci</a></li>
                <li><a href="<?= page('contact')->url() ?>#offices">Pobočky</a></li>
              </ul>
            </div>
            <div class="m-footer__group">
              <strong class="m-footer__section">Služby</strong>
              <ul class="m-footer__list">
                <?php foreach (page('services')->children()->visible() as $service): ?>
                  <li class="m-footer__item">
                    <a class="m-footer__link" href="<?= $service->url() ?>"><?= $service->title()->html() ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="m-footer__group">
              <strong class="m-footer__section">Vybrané reference</strong>
              <ul class="m-footer__list">
                <?php foreach (page('projects')->children()->visible() as $project): ?>
                  <li class="m-footer__item">
                    <a class="m-footer__link" href="<?= $project->url() ?>"><?= $project->title()->html() ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="m-footer__group"><strong class="m-footer__section">O nás</strong>
              <ul class="m-footer__list">
                <li class="m-footer__item">
                  <a class="m-footer__link" href="<?= page('about')->url() ?>">Představení</a>
                </li>
                <li class="m-footer__item">
                  <a class="m-footer__link" href="<?= page('about')->url() ?>#people">Náš tým</a>
                </li>
                <li class="m-footer__item">
                  <a class="m-footer__link" href="<?= page('about')->url() ?>#careers">Kariéra</a>
                </li>
              </ul>
            </div>
          </div><small class="m-footer__copyright"><?= $site->colophon()->html() ?></small>
        </div>
      </footer>

    </div>
  </div>

  <?= js('assets/js/site-min.js') ?>

</body>
</html>
