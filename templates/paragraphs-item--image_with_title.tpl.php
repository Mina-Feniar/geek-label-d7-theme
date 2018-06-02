<?php

/**
 * @file
 * Theme implementation for Services paragraph.
 */
?>
<div class="paragraph paragraph-services <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="container clearfix">
      <h1 class="text-center"><?php print $content['field_services_title']['#items'][0]['value']; ?></h1>
      <?php
      if (isset($content['field_image_with_title']['#items'])) {
        foreach ($content['field_image_with_title']['#items'] as $item) {
          $entity = array_shift(entity_load('field_collection_item', array($item['value'])));
          ?>
          <div class="col-sm-12 col-md-3 component">
            <div class="clearfix">
              <div class="img-wrap pull-left">
                <img alt="<?php print $content['field_services_title']['#items'][0]['value']; ?>"
                     src="<?php print file_create_url($entity->field_sec_image[LANGUAGE_NONE][0]['uri']); ?>"/>
              </div>
              <h4 class="text-center pull-left"><?php print $entity->field_sec_title[LANGUAGE_NONE][0]['value']; ?></h4>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</div>
