<div class="m-detail__split">
  <?php if ($data->image()->isNotEmpty()): ?>
    <img
    data-src="<?= $page->image($data->image())->resize(1024)->url() ?>"
    data-srcset="
    <?= $page->image($data->image())->resize(640)->url() ?> 640w,
    <?= $page->image($data->image())->resize(1024)->url() ?> 1024w,
    <?= $page->image($data->image())->resize(1440)->url() ?> 1440w"
    alt="<?= $page->title()->html() ?> Detail">
  <?php
    endif;
    if ($data->video()->isNotEmpty()):
  ?>
    <div class="m-detail__embed">
      <div class="m-detail__holder">
        <iframe width="560" height="315" src="<?= $data->video() ?>" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  <?php endif ?>
</div>
