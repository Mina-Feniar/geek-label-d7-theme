<?php

/**
 * @file
 * Theme implementation for Clients Paragraph.
 */
?>
<div class="paragraph paragraph-clients <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content container clearfix"<?php print $content_attributes; ?>>
    <h1 class="text-center">Clients</h1>
    <div id="carousel-arrows" class="carousel-type-2 carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox"></div>
      <div class="hidden-xs">
        <!-- Controllers --->
        <a class="left carousel-control" href="#carousel-arrows" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-arrows" role="button" data-slide="next">
          <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
        </a>
      </div>
      <div class="visible-xs">
        <!-- Indicators -->
        <ol class="carousel-indicators"></ol>
      </div>
    </div>
  </div>
</div>
<div class="clients-temp">
  <?php
  if (isset($content['field_clients']['#items'])) {
    $counter = 0;
    foreach ($content['field_clients']['#items'] as $client) {
      ?>
      <div class="single-client" id="client-<?php print $counter; ?>">
        <img class="slider-img img-responsive" src="<?php print file_create_url($client['node']->field_logo[LANGUAGE_NONE][0]['uri']); ?>" alt="<?php print $client['node']->title; ?>" />
      </div>
      <?php
      $counter++;
    }
  }
  ?>
</div>
