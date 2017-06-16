<?php

/*Author: Aleksey Chan*/

/**
 * Remove style attribute from html tags
 */

function smarty_modifier_clean_style($text)
{
    return preg_replace('/(font-size:.*?;)|(width:.*?px;)|(height:.*?px;)|(font-family:.*?;)|(class=".*?")|(margin.*?;")|(background.*?;)|(line-height.*?;)|(text-indent.*?;)|(border.*?;)/imu', '', $text);
}

?>
