<?php

/*Author: Aleksey Chan*/

/**
 * Remove font changes, images and size  attributes from html
 */

function smarty_modifier_clean_shit($text)
{
    return preg_replace('/(font-size:.*?;)|(<img.*?>)|(width:.*?px;)|(height:.*?px;)|(font-family:.*?;)|(class=".*?")|(margin.*?;")|(background.*?;)|(line-height.*?;)|(text-indent.*?;)/imu', '', $text);
}

?>
