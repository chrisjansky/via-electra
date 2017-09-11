<?php if ($data->image()->isNotEmpty()): ?>
  <img data-src="<?= $page->image($data->image())->url() ?>" alt="<?= $page->title()->html() ?> Detail">
<?php endif ?>
