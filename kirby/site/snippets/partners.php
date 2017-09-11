<div class="c-partners">
  <h3 class="c-partners__title">Partneři</h3>
  <ul class="c-partners__list">
    <?php
      foreach ($site->partners()->yaml() as $partner):
      if ($partnerImg = $site->image($partner)):
    ?>
      <li class="c-partners__item <?= $partnerImg->name() ?>">
        <img src="<?= $partnerImg->url() ?>" alt="Partner logo">
      </li>
    <?php endif; endforeach ?>
  </ul>
</div>
