<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php print($block_html_id); ?>" aria-expanded="false" aria-controls="<?php print($block_html_id); ?>">
  <?php print_r($block->subject);?>
</button>
<div class="collapse" id="<?php print_r($block_html_id); ?>">
  <div class="well">
    <?php print_r($content); ?>
  </div>
</div>

