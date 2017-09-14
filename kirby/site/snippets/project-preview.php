<div class="m-work__item">
  <a class="m-work__image" data-src="<?= $project->general_cover()->toFile()->url() ?>" href="<?= $project->url() ?>"></a>
  <div class="m-work__content">
    <a class="m-work__link" href="<?= $project->url() ?>">
      <strong class="m-work__cat">
         <?= Architect::field_option_label('project', 'general_category', $project->general_category(), $site->language()->code()) ?>         
      </strong>
      <h3 class="m-work__name"><?= $project->title()->html() ?></h3>
      <span class="m-work__arrow"><svg width="64" height="25" viewBox="0 0 64 25" xmlns="http://www.w3.org/2000/svg"><title>Group</title><defs><linearGradient id="green-gradient" gradientUnits="userSpaceOnUse"><stop stop-color="#85CC3D" offset="0%"/><stop stop-color="#008040" offset="100%"/></linearGradient></defs><g transform="translate(1)" fill="none"><path stroke="#008040" d="M50.02 0l12.022 12.02L50.02 24.043"/><path d="M61 12H0" id="Line-2" stroke="url(#green-gradient)" stroke-linecap="square"/></g></svg></span>
    </a>
  </div>
</div>
