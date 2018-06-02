<?php

/**
 * @file
 * Theme implementation for Forms Paragraph.
 */
?>
<div class="paragraph paragraph-forms <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content container clearfix"<?php print $content_attributes; ?>>
    <h1 class="text-center"><?php print $content['field_webforms']['#items'][0]['node']->title; ?></h1>
    <div class="form">
      <?php
      // Loading the Webform.
      $block = module_invoke('webform', 'block_view', 'client-block-' . $content['field_webforms']['#items'][0]['node']->nid);
      print render($block['content']);
      ?>
    </div>
    <div class="description">
      <?php
      // Displaying the Phone No. if exists.
      if (isset($content['field_webforms']['#items'][0]['node']->field_phone_no[LANGUAGE_NONE][0]['value'])) {
        ?>
        <div class="text-center phone visible-lg">
          Or Phone on: <?php print $content['field_webforms']['#items'][0]['node']->field_phone_no[LANGUAGE_NONE][0]['value']; ?>
        </div>
        <div class="text-center phone hidden-lg">
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
          <?php print $content['field_webforms']['#items'][0]['node']->field_phone_no[LANGUAGE_NONE][0]['value']; ?>
        </div>
        <?php
      }

      // Displaying the contact Email if exists.
      if (isset($content['field_webforms']['#items'][0]['node']->field_email[LANGUAGE_NONE][0]['email'])) {
        ?>
        <div class="email text-center hidden-lg">
          <a href="mailto:<?php print $content['field_webforms']['#items'][0]['node']->field_email[LANGUAGE_NONE][0]['email']; ?>">
            <i class="fa fa-envelope-o"></i>
            <?php print $content['field_webforms']['#items'][0]['node']->field_email[LANGUAGE_NONE][0]['email']; ?>
          </a>
        </div>
        <?php } ?>
    </div>
  </div>
</div>
