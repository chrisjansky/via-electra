<?php if ($data->image()->isNotEmpty()): ?>
  <img data-src="<?= $page->image($data->image())->resize(2880)->url() ?>" alt="<?= $page->title()->html() ?> Detail">
<?php endif ?>
