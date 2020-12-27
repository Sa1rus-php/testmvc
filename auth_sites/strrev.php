<?php
function mb_strrev($text)
{
    return join('', array_reverse(preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY)));
}

echo mb_strrev((htmlspecialchars($_POST["text"])));
?>