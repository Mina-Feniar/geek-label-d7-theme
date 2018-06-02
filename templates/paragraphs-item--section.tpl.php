<?php

/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>

<div class="paragraph paragraph-section">
  <div class="paragraph-section-wrap">
    <img class="component img-responsive img" src="<?php print file_create_url($content['field_section_image'][0]['#item']['uri']); ?>" />
    <?php
    $text_in_white = '';
    if (isset($content['field_description_in_white_color']['#items'][0]['value']) && $content['field_description_in_white_color']['#items'][0]['value'] == 1) {
      $text_in_white = 'white-text';
    }
    ?>
    <div class="component text <?php print $text_in_white; ?>"><?php print $content['field_description']['#items'][0]['value']; ?></div>
  </div>
</div>
