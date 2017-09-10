<?php
  return function($site, $pages, $page) {

    $primary_uri = $site->find('contact')->people_primary()->value();
    $primary_person = $site->find('contact')->find($primary_uri);

    return compact('primary_uri', 'primary_person');
  }
?>
