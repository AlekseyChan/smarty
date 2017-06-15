<?php

/*Author: Aleksey Chan*/

/**
 * Remove tables, images and style attribute from html tags
 */

function smarty_modifier_clean_shit($text)
{
    return preg_replace('/(style=".*?")|(<table[\s\S]*\/table>)|(<img.*?>)/imu', '', $text);
}

?>
