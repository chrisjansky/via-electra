<?php if ($data->image()->isNotEmpty()): ?>
  <img
  data-src="<?= $page->image($data->image())->resize(1440)->url() ?>"
  data-srcset="
  <?= $page->image($data->image())->resize(640)->url() ?> 640w,
  <?= $page->image($data->image())->resize(1024)->url() ?> 1024w,
  <?= $page->image($data->image())->resize(1440)->url() ?> 1440w,
  <?= $page->image($data->image())->resize(2048)->url() ?> 2048w,
  <?= $page->image($data->image())->resize(2880)->url() ?> 2880w"
  alt="<?= $page->title()->html() ?> Detail">
<?php endif ?>
