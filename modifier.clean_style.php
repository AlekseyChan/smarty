<?php

/*Author: Aleksey Chan*/

/**
 * Remove style attribute from html tags
 */

function smarty_modifier_clean_style($text)
{
    return preg_replace('/(style=".*?")/imu', '', $text);
}

?>
