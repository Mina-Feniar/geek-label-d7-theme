<?php

/**
 * @file
 * Theme implementation for Location Paragraph.
 */
?>
<div class="paragraph paragraph-location <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <h1 class="text-center visible-lg"><?php print $content['field_title']['#items'][0]['value']; ?></h1>
    <h1 class="text-center hidden-lg"><?php print $content['field_title_md']['#items'][0]['value']  ; ?></h1>
    <?php
    // Preparing InoWindow data for large screen devices.
    $data_lg = $content['field_location'][0]['#location']['name'] . '<br />'
      . $content['field_location'][0]['#location']['additional'] . '<br />'
      . $content['field_location'][0]['#location']['street'] . '<br />'
      . $content['field_location'][0]['#location']['city'] . '<br />'
      . $content['field_location'][0]['#location']['province_name'] . '<br />'
      . $content['field_location'][0]['#location']['postal_code'];

    // Preparing InoWindow data for medium screen devices.
    $data_md = $content['field_location'][0]['#location']['name'] . '<br />'
      . $content['field_location'][0]['#location']['additional'] . ', '
      . $content['field_location'][0]['#location']['street'] . '<br />'
      . $content['field_location'][0]['#location']['city'] . ', '
      . $content['field_location'][0]['#location']['province_name'] . ', '
      . $content['field_location'][0]['#location']['postal_code'];
    ?>
    <!-- Display the map -->
    <div id="map"></div>
  </div>
</div>

<?php
// Google Maps Script.
drupal_add_js(drupal_get_path('theme', 'geek_label') . '/js/paragraphLocation.js');
$marker_image = $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'geek_label') . '/images/map-pin.png';
drupal_add_js(array(
    'paragraphLocationSection' =>  array(
        'lat' => $content['field_location'][0]['#location']['latitude'],
        'longitude' => $content['field_location'][0]['#location']['longitude'],
        'marker_image' => $marker_image,
        'data_lg' => $data_lg,
        'data_md' => $data_md,
      )), array('type' => 'setting'));
drupal_add_js('https://maps.googleapis.com/maps/api/js?key=AIzaSyD_5JC1XN-Y30MKRaY1-rAFir2pkt9htbg', 'external');
?>
