<?php

/**
 * @file
 * Homepage template.
 */
?>

<?php
$colors = $anchors = array();
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div id="fullpage">
    <?php
    $counter = 1;
    $section_name = 'section-';
    foreach ($node->field_paragraphs[LANGUAGE_NONE] as $paragraph) {
      if (isset($paragraph['value'])) {
        ?>
        <div class="section default-sec <?php print ($counter == 1 ? 'first-sec' : ''); ?>"
             id="<?php $section_name . $counter; ?>">
          <?php
          // Display Paragraphs.
          $entities = entity_load('paragraphs_item', array($paragraph['value']));
          $paragraphs_render = entity_view('paragraphs_item', $entities, 'full');
          print drupal_render($paragraphs_render);

          // Concat colors and anchors.
          $entities = array_shift($entities);
          array_push($colors, (isset($entities->field_bg_colour[LANGUAGE_NONE][0]['rgb']) ? $entities->field_bg_colour[LANGUAGE_NONE][0]['rgb'] : '#fff'));
          array_push($anchors, $section_name . $counter);

          // Adding arrows except for the last section.
          if (sizeOf($node->field_paragraphs[LANGUAGE_NONE]) != $counter) {
            ?>
            <div class="section-arrow <?php print $entities->field_arrow_color[LANGUAGE_NONE][0]['value']; ?>">
              <a class="anchor" href="<?php print '#' . $section_name . ++$counter; ?>">
                <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
              </a>
            </div>
          <?php } ?>
        </div>
        <?php
      }
    }
    ?>
  </div>
</article>

<?php
// Including Homepage JS.
drupal_add_js(drupal_get_path('theme', 'geek_label') . '/js/homepage.js');
drupal_add_js(array('homePage' => array('anchors' => $anchors, 'colors' => $colors)), array('type' => 'setting'));
?>
