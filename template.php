<?php


/**
 * Inserting jquery from cdn 
 */
function govbr_subtheme_js_alter(&$js)
{
    $jqKey = "my-new-jquery"; // a key for new jquery file entry
    $js[$jqKey] = $js['misc/jquery.js']; // copy the default jquery settings, so you don't have to re-type them.
    $js[$jqKey]['data'] = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"; // the path for new jquery file.
    $js[$jqKey]['version'] = '3.5.1'; // your jquery version.

    unset($js['misc/jquery.js']); // delete drupal's default jquery file.
}

?>
