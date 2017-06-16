<?php

/*Author: Aleksey Chan*/

/**
 * Purify tables
 */

function smarty_modifier_purify_tables($text)
{
    return preg_replace('/(<table.*?>)/imu', '<table class="table table-striped table-hover">', $text);
}

?>
