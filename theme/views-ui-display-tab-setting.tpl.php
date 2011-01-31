<?php
// $Id$
/**
 * @file views-ui-display-tab-setting.tpl.php
 * Template for each row inside the "boxes" on the display query edit screen.
 */
?>
<div class="views-display-setting clearfix <?php print $zebra; ?>">
  <?php if ($description): ?>
    <span class="label"><?php print ($description . t(':')); ?></span>
  <?php endif; ?>
  <?php if ($gear): ?>
    <?php print $gear; ?>
  <?php endif; ?>
  <?php print $link; ?>
</div>
