<div class="m-detail__split">
  <?php if ($data->image_1()->isNotEmpty()): ?>
    <img data-src="<?= $page->image($data->image_1())->url() ?>" alt="<?= $page->title()->html() ?> Detail">
  <?php
    endif;
    if ($data->image_2()->isNotEmpty()):
  ?>
    <img data-src="<?= $page->image($data->image_2())->url() ?>" alt="<?= $page->title()->html() ?> Detail">
  <?php endif ?>
</div>
