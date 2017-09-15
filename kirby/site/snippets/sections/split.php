<div class="m-detail__split">
  <?php if ($data->image_1()->isNotEmpty()): ?>
    <img
    data-src="<?= $page->image($data->image_1())->resize(1024)->url() ?>"\
    data-srcset="
    <?= $page->image($data->image_1())->resize(640)->url() ?> 640w,
    <?= $page->image($data->image_1())->resize(1024)->url() ?> 1024w,
    <?= $page->image($data->image_1())->resize(1440)->url() ?> 1440w"
    alt="<?= $page->title()->html() ?> Detail">
  <?php
    endif;
    if ($data->image_2()->isNotEmpty()):
  ?>
    <img
    data-src="<?= $page->image($data->image_2())->resize(1024)->url() ?>"
    data-srcset="
    <?= $page->image($data->image_2())->resize(640)->url() ?> 640w,
    <?= $page->image($data->image_2())->resize(1024)->url() ?> 1024w,
    <?= $page->image($data->image_2())->resize(1440)->url() ?> 1440w"
    alt="<?= $page->title()->html() ?> Detail">
  <?php endif ?>
</div>
